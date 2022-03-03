import * as searchBar from './modules/search.js';
import * as arrange from './modules/ordering.js';
import * as menu from './modules/mobileMenu.js';
import * as contact from './modules/contact.js';
import * as favs from './modules/favorites.js';

searchBar.inputSearch;
if(searchBar.inputSearch){
    searchBar.focus();
}

arrange.filters;
arrange.chosen;
arrange.recent();

menu.btnMobile;

contact.contactButton;
contact.titleReplace();

favs.hearts;
favs.activeFavorite();
favs.itensLength();

