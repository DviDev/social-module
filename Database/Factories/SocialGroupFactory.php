<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Models\SocialGroupModel;

/**
 * @method SocialGroupModel create(array $attributes = [])
 * @method SocialGroupModel make(array $attributes = [])
 */
class SocialGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialGroupModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialGroupEntityModel::props(null, true);
        return [

        ];
    }
}
