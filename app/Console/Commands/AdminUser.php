<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

use function Laravel\Prompts\password;

/**
 * Create the admin login, or reset its password if the email already exists.
 */
class AdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:user
                            {email : Email address used to sign in to /admin}
                            {--name=Admin : Display name}
                            {--password= : Password (prompted for if omitted)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create or update the admin panel user';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = strtolower(trim($this->argument('email')));

        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error("\"{$email}\" is not a valid email address.");

            return self::FAILURE;
        }

        $plain = $this->option('password') ?: password(
            label: 'Password',
            required: true,
            validate: fn (string $value) => strlen($value) < 8 ? 'Use at least 8 characters.' : null,
        );

        if (strlen($plain) < 8) {
            $this->error('Password must be at least 8 characters.');

            return self::FAILURE;
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            ['name' => $this->option('name'), 'password' => $plain],
        );

        $this->components->info(
            ($user->wasRecentlyCreated ? 'Created' : 'Updated')." admin user {$email}."
        );

        return self::SUCCESS;
    }
}
