<?php

namespace Api\Users\Console;

use Api\Users\Repositories\UserRepository;
use Illuminate\Console\Command;

class AddUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:add {first_name} {last_name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new user';

    /**
     * User repository to persist user in database.
     *
     * @var \Api\Users\Repositories\UserRepository
     */
    protected $userRepository;

    /**
     * Create a new command instance.
     *
     * @param \Api\Users\Repositories\UserRepository $userRepository
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();

        $this->userRepository = $userRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = $this->userRepository->create([
            'first_name' => $this->argument('first_name'),
            'last_name' => $this->argument('last_name'),
            'email' => $this->argument('email'),
            'password' => $this->argument('password')
        ]);

        $this->info(sprintf('A user was created with ID %s', $user->id));
    }
}
