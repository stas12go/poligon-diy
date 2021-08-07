<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Athlete
 *
 * @property int $id
 * @property string $name
 * @property string $date_of_birthday
 * @property int $country_id
 * @property int $sport_id
 * @property string $registered_at
 * @method static \Database\Factories\AthleteFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete query()
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete whereDateOfBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete whereRegisteredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Athlete whereSportId($value)
 */
	class Athlete extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $population
 * @property string $continent
 * @property string $flag_url
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereContinent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereFlagUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePopulation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSlug($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sports
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $debut
 * @property string $image_url
 * @property string $icon_url
 * @method static \Illuminate\Database\Eloquent\Builder|Sports newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sports newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sports query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereIconUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sports whereSlug($value)
 */
	class Sports extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

