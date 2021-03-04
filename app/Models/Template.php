<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    
    // protected $fillable = ['template_name', 'case', 'summary', 'chronology', 'measure', 'conclusion'];
    protected $fillable = ['case', 'summary'];

    public function fillablesSentences()
    {
        $sentence = '';
        foreach ($this->fillable as $key => $value) {
            $sentence .= $this->$value;
        }
        return $sentence;
    }

    public function setupInputs()
    {
        // get all word containing square brackets []
        $pattern = '/\[\w*\]/i';

        preg_match_all($pattern, $this->fillablesSentences(), $matches);
        $uniqueMatches = array_unique($matches[0]);
        // get unique matches, but still contains []

        $textTypeInputName = [];
        $replaceSquareBracketsPattern = '/\[|\]/';
        foreach ($uniqueMatches as $match) {
            $textTypeInputName[] = preg_replace($replaceSquareBracketsPattern, '', $match);
        }

        // result, array with only word
        return $textTypeInputName;
        
    }

}
