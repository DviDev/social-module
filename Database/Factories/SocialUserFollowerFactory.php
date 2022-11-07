<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerEntityModel;
use Modules\Social\Models\SocialUserFollowerModel;

/**
 * @method SocialUserFollowerModel create(array $attributes = [])
 * @method SocialUserFollowerModel make(array $attributes = [])
 */
class SocialUserFollowerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialUserFollowerModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialUserFollowerEntityModel::props(null, true);
        return [
            $p->user_id => null,
            $p->follower_id => null,
            $p->notification_enabled => $this->faker->boolean(),
        ];
    }
}
