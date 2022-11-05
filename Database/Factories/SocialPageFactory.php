<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Models\SocialPageModel;

/**
 * @method SocialPageModel create(array $attributes = [])
 * @method SocialPageModel make(array $attributes = [])
 */
class SocialPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPageModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPageEntityModel::props(null, true);
        return [

        ];
    }
}
