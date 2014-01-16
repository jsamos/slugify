<?php
namespace Cocur\Slugify;

class Slugify implements SlugifyInterface
{
    public $rules = array(
        'º'=>0,
        '°'=>0,
        '¹'=>1,
        '²'=>2,
        '³'=>3,
        'æ'=>'ae',
        'ǽ'=>'ae',
        'ä'=>'ae',
        'œ'=>'oe',
        'ö'=>'oe',
        'À'=>'A',
        'Á'=>'A',
        'Â'=>'A',
        'Ã'=>'A',
        'Å'=>'A',
        'Ǻ'=>'A',
        'Ā'=>'A',
        'Ă'=>'A',
        'Ą'=>'A',
        'Ǎ'=>'A',
        'А'=>'A',
        'à'=>'a',
        'á'=>'a',
        'â'=>'a',
        'ã'=>'a',
        'å'=>'a',
        'ǻ'=>'a',
        'ā'=>'a',
        'ă'=>'a',
        'ą'=>'a',
        'ǎ'=>'a',
        'ª'=>'a',
        'а'=>'a',
        '@'=>'at',
        'Б'=>'B',
        'б'=>'b',
        'Ç'=>'C',
        'Ć'=>'C',
        'Ĉ'=>'C',
        'Ċ'=>'C',
        'Č'=>'C',
        'Ц'=>'C',
        'ç'=>'c',
        'ć'=>'c',
        'ĉ'=>'c',
        'ċ'=>'c',
        'č'=>'c',
        'ц'=>'c',
        'Ð'=>'Dj',
        'Ď'=>'Dj',
        'Đ'=>'Dj',
        'Д'=>'Dj',
        'ð'=>'dj',
        'ď'=>'dj',
        'đ'=>'dj',
        'д'=>'dj',
        'È'=>'E',
        'É'=>'E',
        'Ê'=>'E',
        'Ë'=>'E',
        'Ē'=>'E',
        'Ĕ'=>'E',
        'Ė'=>'E',
        'Ę'=>'E',
        'Ě'=>'E',
        'Е'=>'E',
        'Ё'=>'E',
        'Э'=>'E',
        'è'=>'e',
        'é'=>'e',
        'ê'=>'e',
        'ë'=>'e',
        'ē'=>'e',
        'ĕ'=>'e',
        'ė'=>'e',
        'ę'=>'e',
        'ě'=>'e',
        'е'=>'e',
        'ё'=>'e',
        'э'=>'e',
        'Ф'=>'F',
        'ƒ'=>'f',
        'ф'=>'f',
        'Ĝ'=>'G',
        'Ğ'=>'G',
        'Ġ'=>'G',
        'Ģ'=>'G',
        'Г'=>'G',
        'Ґ'=>'G',
        'ĝ'=>'g',
        'ğ'=>'g',
        'ġ'=>'g',
        'ģ'=>'g',
        'г'=>'g',
        'ґ'=>'g',
        'Ĥ'=>'H',
        'Ħ'=>'H',
        'Х'=>'H',
        'ĥ'=>'h',
        'ħ'=>'h',
        'х'=>'h',
        'Ì'=>'I',
        'Í'=>'I',
        'Î'=>'I',
        'Ï'=>'I',
        'Ĩ'=>'I',
        'Ī'=>'I',
        'Ĭ'=>'I',
        'Ǐ'=>'I',
        'Į'=>'I',
        'İ'=>'I',
        'И'=>'I',
        'І'=>'I',
        'ì'=>'i',
        'í'=>'i',
        'î'=>'i',
        'ï'=>'i',
        'ĩ'=>'i',
        'ī'=>'i',
        'ĭ'=>'i',
        'ǐ'=>'i',
        'į'=>'i',
        'ı'=>'i',
        'и'=>'i',
        'і'=>'i',
        'Ĵ'=>'J',
        'Й'=>'J',
        'ĵ'=>'j',
        'й'=>'j',
        'Ķ'=>'K',
        'К'=>'K',
        'ķ'=>'k',
        'к'=>'k',
        'Ĺ'=>'L',
        'Ļ'=>'L',
        'Ľ'=>'L',
        'Ŀ'=>'L',
        'Ł'=>'L',
        'Л'=>'L',
        'ĺ'=>'l',
        'ļ'=>'l',
        'ľ'=>'l',
        'ŀ'=>'l',
        'ł'=>'l',
        'л'=>'l',
        'М'=>'M',
        'м'=>'m',
        'Ñ'=>'N',
        'Ń'=>'N',
        'Ņ'=>'N',
        'Ň'=>'N',
        'Н'=>'N',
        'ñ'=>'n',
        'ń'=>'n',
        'ņ'=>'n',
        'ň'=>'n',
        'ŉ'=>'n',
        'н'=>'n',
        'Ò'=>'O',
        'Ó'=>'O',
        'Ô'=>'O',
        'Õ'=>'O',
        'Ō'=>'O',
        'Ŏ'=>'O',
        'Ǒ'=>'O',
        'Ő'=>'O',
        'Ơ'=>'O',
        'Ø'=>'O',
        'Ǿ'=>'O',
        'О'=>'O',
        'ò'=>'o',
        'ó'=>'o',
        'ô'=>'o',
        'õ'=>'o',
        'ō'=>'o',
        'ŏ'=>'o',
        'ǒ'=>'o',
        'ő'=>'o',
        'ơ'=>'o',
        'ø'=>'o',
        'ǿ'=>'o',
        'º'=>'o',
        'о'=>'o',
        'П'=>'P',
        'п'=>'p',
        'Ŕ'=>'R',
        'Ŗ'=>'R',
        'Ř'=>'R',
        'Р'=>'R',
        'ŕ'=>'r',
        'ŗ'=>'r',
        'ř'=>'r',
        'р'=>'r',
        'Ś'=>'S',
        'Ŝ'=>'S',
        'Ş'=>'S',
        'Ș'=>'S',
        'Š'=>'S',
        'С'=>'S',
        'ś'=>'s',
        'ŝ'=>'s',
        'ş'=>'s',
        'ș'=>'s',
        'š'=>'s',
        'ſ'=>'s',
        'с'=>'s',
        'Ţ'=>'T',
        'Ț'=>'T',
        'Ť'=>'T',
        'Ŧ'=>'T',
        'Т'=>'T',
        'ţ'=>'t',
        'ț'=>'t',
        'ť'=>'t',
        'ŧ'=>'t',
        'т'=>'t',
        'Ù'=>'U',
        'Ú'=>'U',
        'Û'=>'U',
        'Ũ'=>'U',
        'Ū'=>'U',
        'Ŭ'=>'U',
        'Ů'=>'U',
        'Ű'=>'U',
        'Ų'=>'U',
        'Ư'=>'U',
        'Ǔ'=>'U',
        'Ǖ'=>'U',
        'Ǘ'=>'U',
        'Ǚ'=>'U',
        'Ǜ'=>'U',
        'У'=>'U',
        'ù'=>'u',
        'ú'=>'u',
        'û'=>'u',
        'ũ'=>'u',
        'ū'=>'u',
        'ŭ'=>'u',
        'ů'=>'u',
        'ű'=>'u',
        'ų'=>'u',
        'ư'=>'u',
        'ǔ'=>'u',
        'ǖ'=>'u',
        'ǘ'=>'u',
        'ǚ'=>'u',
        'ǜ'=>'u',
        'у'=>'u',
        'ü'=>'ue',
        'Ü'=>'UE',
        'В'=>'V',
        'в'=>'v',
        'Ý'=>'Y',
        'Ÿ'=>'Y',
        'Ŷ'=>'Y',
        'Ы'=>'Y',
        'ý'=>'y',
        'ÿ'=>'y',
        'ŷ'=>'y',
        'ы'=>'y',
        'Ŵ'=>'W',
        'ŵ'=>'w',
        'Ź'=>'Z',
        'Ż'=>'Z',
        'Ž'=>'Z',
        'З'=>'Z',
        'ź'=>'z',
        'ż'=>'z',
        'ž'=>'z',
        'з'=>'z',
        'Æ'=>'AE',
        'Ǽ'=>'AE',
        'Ä'=>'AE',
        'ß'=>'ss',
        'Ĳ'=>'IJ',
        'ĳ'=>'ij',
        'Œ'=>'OE',
        'Ö'=>'OE',
        'Ч'=>'Ch',
        'ч'=>'ch',
        'Ю'=>'Ju',
        'ю'=>'ju',
        'Я'=>'Ja',
        'я'=>'ja',
        'Ш'=>'Sh',
        'ш'=>'sh',
        'Щ'=>'Shch',
        'щ'=>'shch',
        'Ж'=>'Zh',
        'ж'=>'zh',
        'ї'=>'ji',
        'Ї'=>'Ji',
    );

    public function slugify($string, $separator = '-')
    {
        $string = strtolower(strtr($string, $this->rules));
        $string = preg_replace('/([^a-z0-9]|-)+/', $separator, $string);
        $string = strtolower($string);
        return trim($string, $separator);
    }

    /**
     * Static method to create new instance of {@see Slugify}.
     *
     * @return Slugify
     */
    public static function create()
    {
        return new static();
    }
}
