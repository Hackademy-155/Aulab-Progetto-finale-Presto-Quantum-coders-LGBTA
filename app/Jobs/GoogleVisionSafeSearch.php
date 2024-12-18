<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Queueable;


    private $product_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($product_image_id)
    {
        $this->product_image_id = $product_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->product_image_id);

        if (!$i) {
            return;
        }

        $image = file_get_contents(storage_path('app/public/' . $i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));


        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe = $response->getSafeSearchAnnotation();

        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        $likelihoodName = [
            'text-secondary bi bi-circle-fill',
            'text-success bi bi-check-circle-fill',
            'text-success bi bi-check-circle-fill',
            'text-warning bi bi-exclamation-circle-fill',
            'text-warning bi bi-exclamation-circle-fill',
            'text-danger bi bi-dash-circle-fill'
        ];

        $i->adult = $likelihoodName[$adult];
        $i->spoof = $likelihoodName[$spoof];
        $i->racy = $likelihoodName[$racy];
        $i->medical = $likelihoodName[$medical];
        $i->violence = $likelihoodName[$violence];

        $i->save();
    }
}