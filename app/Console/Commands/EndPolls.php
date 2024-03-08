<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Enums\PollStatus;
use App\Models\Poll;

class EndPolls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'poll:end';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'End started polls';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Poll::query()->where([
            ['status', PollStatus::STARTED->value],
            ['end_at', '<=', now()]
        ])->update(['status'=>PollStatus::FINISHED->value]);

        return Command::SUCCESS;
    }
}
