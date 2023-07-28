<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserEntityModel;
use Modules\Social\Models\SocialGroupUserModel;

/**
 * @method SocialGroupUserModel create(array $attributes = [])
 * @method SocialGroupUserModel make(array $attributes = [])
 */
class SocialGroupUserFactory extends BaseFactory
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
        //$p = SocialGroupUserEntityModel::props(null, true);
        return parent::getValues();
    }
}
