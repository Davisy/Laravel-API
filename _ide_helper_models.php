<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Collector
 *
 * @property int $id
 * @property int $user_id
 * @property string $company_name
 * @property string $business_type
 * @property string|null $space_available
 * @property string|null $open_times
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DisposerRequest[] $disposerRequest
 * @property-read int|null $disposer_request_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Point[] $point
 * @property-read int|null $point_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Collector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collector query()
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereOpenTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereSpaceAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collector whereUserId($value)
 */
	class Collector extends \Eloquent {}
}

namespace App{
/**
 * App\Disposer
 *
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DisposerRequest[] $disposerRequest
 * @property-read int|null $disposer_request_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Point[] $point
 * @property-read int|null $point_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disposer whereUserId($value)
 */
	class Disposer extends \Eloquent {}
}

namespace App{
/**
 * App\DisposerRequest
 *
 * @property int $id
 * @property int $collector_id
 * @property int $disposer_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Collector $collector
 * @property-read \App\Disposer $disposer
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest whereCollectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest whereDisposerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DisposerRequest whereUpdatedAt($value)
 */
	class DisposerRequest extends \Eloquent {}
}

namespace App{
/**
 * App\Faq
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 */
	class Faq extends \Eloquent {}
}

namespace App{
/**
 * App\Point
 *
 * @property int $id
 * @property int $collector_id
 * @property int $disposer_id
 * @property string $material_size
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Collector $collector
 * @property-read \App\Disposer $disposer
 * @method static \Illuminate\Database\Eloquent\Builder|Point newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Point query()
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereCollectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereDisposerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereMaterialSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Point whereUpdatedAt($value)
 */
	class Point extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $phone_number
 * @property string|null $image
 * @property int $role
 * @property string $uuid
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Collector|null $collector
 * @property-read \App\Disposer|null $disposer
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUuid($value)
 */
	class User extends \Eloquent {}
}

