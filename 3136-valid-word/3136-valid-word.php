class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function isValid($word) {
        // 1. Check length
        if (strlen($word) < 3) return false;

        // 2. Check for invalid characters
        if (!preg_match('/^[a-zA-Z0-9]+$/', $word)) return false;

        // 3. Check for at least one vowel
        if (!preg_match('/[aeiouAEIOU]/', $word)) return false;

        // 4. Check for at least one consonant (letter but not vowel)
        if (!preg_match('/[b-df-hj-np-tv-zB-DF-HJ-NP-TV-Z]/', $word)) return false;

        return true;
    }
}
