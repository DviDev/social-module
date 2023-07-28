<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialPageFollower\SocialPageFollowerEntityModel;
use Modules\Social\Models\SocialPageFollowerModel;

/**
 * @method SocialPageFollowerModel create(array $attributes = [])
 * @method SocialPageFollowerModel make(array $attributes = [])
 */
class SocialPageFollowerFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPageFollowerModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPageFollowerEntityModel::props(null, true);
        return [
            $p->page_id => null,
            $p->user_id => null,
        ];
    }
}
