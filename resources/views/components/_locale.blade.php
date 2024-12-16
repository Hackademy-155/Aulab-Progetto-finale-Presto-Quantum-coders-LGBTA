<form action="{{route('setLanguage', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" alt="Immagine bandiera della lingua" width="30" height="30">
        {{strtoupper($lang);}}
    </button>
</form>