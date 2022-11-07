<?php

namespace Modules\Social\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Social\Entities\SocialPollItemVote\SocialPollItemVoteEntityModel;
use Modules\Social\Models\SocialPollItemVoteModel;

/**
 * @method SocialPollItemVoteModel create(array $attributes = [])
 * @method SocialPollItemVoteModel make(array $attributes = [])
 */
class SocialPollItemVoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialPollItemVoteModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SocialPollItemVoteEntityModel::props(null, true);
        return [
            $p->poll_id => null,
            $p->type_id => null,
            $p->user_id => null,
        ];
    }
}
