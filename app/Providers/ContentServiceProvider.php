<?php

namespace App\Providers;

use App\Models\Announs;
use App\Models\Category;
use App\Models\Post;
use App\Models\Doc;
use App\Models\Report;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Goutte\Client;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {

            $client = new Client();
            // $url = 'https://www.google.com/finance/quote/SGER:IDX';
            // $url = 'https://www.idxchannel.com/stocks?index=SGER&indexdetail=stockexchang3';
            $url = 'https://www.idnfinancials.com/id/sger/pt-sumber-global-energy-tbk';
            $page = $client->request('GET', $url);



            //google
            // $data = $page->filter('.YMlKec.fxKbKc')->text();
            $cal = $page->filter('span.c')->text();
            // $cal = $page->filter('.text-body--3.text-red')->text();
            $tanda = substr($cal, 0, 1);
            $data = $page->filter('span.p')->text();
            $up = $page->filter('span.v')->text();

            $postpublish = Post::where('status', 'Publish')->where('type', 'Blog')->where('id_category', '!=', 3)->OrderBy('created_at', 'desc')->limit(6)->get();
            $pagepublish = Post::where('status', 'Publish')->where('type', 'Page')->get();
            $modal = Announs::where('status', 'Publish')->orderBy('created_at', 'desc')->first();




            $view->with([
                'category' => Category::all(),
                'menus' => Menu::all(),
                'pages' => Page::all(),
                'announs' => Announs::where('status', 'Publish')->limit(3)->get(),
                'laporans' => Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->limit(4)->get(),
                'publicoffering' => Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->where('category', 'Public Offering Prospectus')->limit(12)->get(),
                'pagepublish' => $pagepublish,
                'docs' => Doc::all(),

                'data' => $data,
                'cal' => $cal,
                'tanda' => $tanda,
                'up' => $up,
                'modal' => $modal,
                'postpublish' => $postpublish
            ]);
        });
    }
}
