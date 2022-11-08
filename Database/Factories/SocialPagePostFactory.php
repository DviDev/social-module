<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;
use Modules\Social\Models\SocialPagePostModel;

/**
 * @method SocialPagePostModel create(array $attributes = [])
 * @method SocialPagePostModel make(array $attributes = [])
 */
class SocialPagePostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPagePostModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPagePostEntityModel::props(null, true);
        return [
            $p->page_id => null,
            $p->post_id => null,
        ];
    }
}
