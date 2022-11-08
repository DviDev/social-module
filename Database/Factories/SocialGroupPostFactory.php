<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostEntityModel;
use Modules\Social\Models\SocialGroupPostModel;

/**
 * @method SocialGroupPostModel create(array $attributes = [])
 * @method SocialGroupPostModel make(array $attributes = [])
 */
class SocialGroupPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialGroupPostModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialGroupPostEntityModel::props(null, true);
        return [
            $p->group_id => null,
            $p->post_id => null,
        ];
    }
}
