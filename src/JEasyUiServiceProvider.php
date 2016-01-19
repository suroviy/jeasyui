<?php namespace Suroviy\JEasyUi;

use Illuminate\Support\ServiceProvider;

class JEasyUiServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
			$this->loadViewsFrom(__DIR__.'/../views', 'jeasyui');
          	//$this->loadTranslationsFrom(__DIR__ . '/../lang', 'jetweb');
	/*
            $this->publishes([
                __DIR__.'/../resources' => base_path('resources')
            ]);
	*/
			include __DIR__.'/../routes.php';
	}
        // ---
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