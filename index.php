<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/portfolio':
        require 'html/PORTFOLIO.html';
        break;
    case '/awards':
        require 'html/AWARDS.html';
        break;
    case '/aboutus':
        require 'html/ABOUT.html';
        break;
    case '/contact':
        require 'html/CONTACT.html';
        break;
    case '/american_classic':
        require 'html/AMERICAN_CLASSIC.html';
        break;
    case '/semmerhouse_in_nederland':
        require 'html/SUMMERHOUSE_IN_NEDERLAND.html';
        break;
    case '/luxury_penthouse':
        require 'html/LUXURY_PENTHOUSE_IN_ROME.html';
        break;

    case '/appartment_legend':
        require 'html/APPARTMENT_LEGEND.html';
        break;
    case '/townhouse_in_london':
        require 'html/TOWNHOUSE_IN_LONDON.html';
        break;
    case '/hilltopmansion':
        require 'html/BEDROOM_HILLTOP_MANSION.html';
        break;
    case '/appartment_art-deco':
        require 'html/SUMMERHOUSE_IN_NERELAND2.html';
        break;
    case '/summerhouse_in_france':
        require 'html/SUMMERHOUSE_IN_FRANCE.html';
        break;

    case '/summerhouse_in_germany':
        require 'html/SUMMERHOUSE_IN_GERMANY.html';
        break;

    default:
        require 'html/HOME.html';
}