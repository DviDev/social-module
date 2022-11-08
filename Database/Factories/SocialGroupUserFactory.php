<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserEntityModel;
use Modules\Social\Models\SocialGroupUserModel;

/**
 * @method SocialGroupUserModel create(array $attributes = [])
 * @method SocialGroupUserModel make(array $attributes = [])
 */
class SocialGroupUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialGroupUserModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialGroupUserEntityModel::props(null, true);
        return [
            $p->group_id => null,
            $p->user_id => null,
        ];
    }
}
