<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        // ******************** Company Information ******************** //
        $CompanyName = "National Academy of Research and Training Run By Gurukul Education Trust";
        $CompanyShortName = "NART";
        $CompanyPhone1 = "9992000178";
        $CompanyPhone2 = "7404092316";
        $CompanyGermanyPhone = "‪+49 15141379641";
        $CompanyAustraliaPhone = "+61 4101555571";
        $CompanyCyprusPhone1 = "‪+35 796170138‬";
        $CompanyCyprusPhone2 = "‪‪‪+35 796883774‬";
        $CompanyCanadaPhone = "‪‪‪‪+12 045994274‬";
        $CompanyUSPhone = "+1 (603) 715-5746";
        $CompanyEmail = "nartsrs@gmail.com";
        $CompanyAddress = "Opp. Main Bus Stand Hisar Road, Sirsa 125055 (HR)";
        $CompanyGermany = "Landsberger Str. 441 Stw/App 199 81241 München Germany";
        $CompanyAustralia = "4/90 Johnston Street Annandale 2038 Sydney australlia";
        $CompanyCyprus = "Leoforos Akropoleos 52 Strovolos Nicosia Post Code 2012 Cyprus ";
        $CompanyCanada = "721 adsum dr. Winnipeg MB R2P 1L5 Canada ";
        $CompanyUS = "06 Pleasant St, Concord, NH 03301, United States";
        $CompanyURL = "https://www.nartsrs.com";


        // ******************** Company Assets ******************** //
        $CompanyLogo = 'admin/assets/images/logo.png';
        $CompanyFavicon = 'admin/assets/images/favicon.png';

        // ******************** Company Social Media Links ******************** //
        $CompanyFacebook = 'https://www.facebook.com';
        $CompanyTwitter = 'https://www.twitter.com';
        $CompanyInstagram = 'https://www.instagram.com';
        $CompanyYoutube = 'https://www.youtube.com';


        view()->share('CompanyName', $CompanyName);
        view()->share('CompanyShortName', $CompanyShortName);
        view()->share('CompanyPhone1', $CompanyPhone1);
        view()->share('CompanyPhone2', $CompanyPhone2);
        view()->share('CompanyGermanyPhone', $CompanyGermanyPhone);
        view()->share('CompanyAustraliaPhone', $CompanyAustraliaPhone);
        view()->share('CompanyCyprusPhone1', $CompanyCyprusPhone1);
        view()->share('CompanyCyprusPhone2', $CompanyCyprusPhone2);
        view()->share('CompanyCanadaPhone', $CompanyCanadaPhone);
        view()->share('CompanyUSPhone', $CompanyUSPhone);
        view()->share('CompanyEmail', $CompanyEmail);
        view()->share('CompanyAddress', $CompanyAddress);
        view()->share('CompanyGermany', $CompanyGermany);
        view()->share('CompanyAustralia', $CompanyAustralia);
        view()->share('CompanyCyprus', $CompanyCyprus);
        view()->share('CompanyCanada', $CompanyCanada);
        view()->share('CompanyUS', $CompanyUS);
        view()->share('CompanyURL', $CompanyURL);

        // ******************** Company Assets ******************** //
        view()->share('CompanyLogo', $CompanyLogo);
        view()->share('CompanyFavicon', $CompanyFavicon);

        // ******************** Company Social Media Links ******************** //
        view()->share('CompanyFacebook', $CompanyFacebook);
        view()->share('CompanyTwitter', $CompanyTwitter);
        view()->share('CompanyInstagram', $CompanyInstagram);
        view()->share('CompanyYoutube', $CompanyYoutube);

    }
}
