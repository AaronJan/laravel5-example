<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AuthComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		View::composer('*', 'App\Http\ViewComposers\AuthComposer');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
