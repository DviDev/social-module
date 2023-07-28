<?php
namespace Modules\Social\Database\Factories;

use Modules\Base\Factories\BaseFactory;
use Modules\Social\Models\SocialUserProfileModel;

/**
 * @method SocialUserProfileModel create(array $attributes = [])
 * @method SocialUserProfileModel make(array $attributes = [])
 */
class SocialUserProfileFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialUserProfileModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        //$p = SocialUserProfileEntityModel::props(null, true);
        return $this->getValues();
    }
}
