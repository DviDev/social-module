<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialPoll\SocialPollEntityModel;
use Modules\Social\Models\SocialPollModel;

/**
 * @method SocialPollModel create(array $attributes = [])
 * @method SocialPollModel make(array $attributes = [])
 */
class SocialPollFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPollModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPollEntityModel::props(null, true);
        return [
            $p->user_id => null,
            $p->description => $this->faker->sentence(),
        ];
    }
}
