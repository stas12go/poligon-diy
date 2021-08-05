<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*if (!function_exists('mb_ucfirst')) {
            function mb_ucfirst($string, $enc = 'UTF-8')
            {
                return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
                    mb_substr($string, 1, mb_strlen($string, $enc), $enc);
            }
        }

        function getContinentName()
        {
            $continentsNamesArray = [];
            $continentName = '';
            $permittedLettersArray = [
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
            ];

            for ($numberOfContinents = 1; $numberOfContinents < rand(2, 6); $numberOfContinents++) {
                for ($continentNameLength = 3; $continentNameLength < rand(4, 12); $continentNameLength++) {
                    $continentName .= $permittedLettersArray[rand(0, count($permittedLettersArray) - 1)];
                }
                array_push($continentsNamesArray, mb_ucfirst($continentName));
                $continentName = '';
            }

            return $continentsNamesArray;
        }*/

        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('population', false, true);
            $table->enum('continent', ['Eurasia', 'Africa', 'North America', 'South America', 'Australia']);
            $table->string('flag_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
