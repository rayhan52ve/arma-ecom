<?php

namespace App\Console\Commands;

use App\Models\Chat;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteChat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-chat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Chats After 10 Days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tenDaysAgo = Carbon::now()->subDays(10);

        Chat::where('created_at', '<', $tenDaysAgo)->delete();

        return 0;
    }
}
