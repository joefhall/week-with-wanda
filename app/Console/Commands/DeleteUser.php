<?php

namespace App\Console\Commands;

use App\Jobs\DeleteUser as DeleteUserJob;
use Illuminate\Console\Command;

class DeleteUser extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'user:delete {userId}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Delete user';

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
   * @return mixed
   */
  public function handle()
  {
    $this->info("Deleting user id {$this->argument('userId')} and associated database entries");
    DeleteUserJob::dispatchNow($this->argument('userId'));
  }
}
