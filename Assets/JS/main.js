import * as searchBar from './modules/search.js';
import * as arrange from './modules/ordering.js';
import * as menu from './modules/mobileMenu.js';
import * as contact from './modules/contact.js';
import * as favs from './modules/favorites.js';

searchBar.inputSearch;
searchBar.focus();
searchBar.searchProduct();

arrange.filters;
arrange.chosen;
arrange.dropdown();
arrange.switchColor();
arrange.completeOrder();

menu.btnMobile;
menu.toggleMenu();

contact.initContact();
contact.contactButton;


