<?php
//test commit
use App\Http\Livewire\About;
use App\Http\Livewire\Accordion;
use App\Http\Livewire\Alerts;
use App\Http\Livewire\Avatar;
use App\Http\Livewire\Background;
use App\Http\Livewire\Badge;
use App\Http\Livewire\BlogDetails;
use App\Http\Livewire\BlogEdit;
use App\Http\Livewire\Border;
use App\Http\Livewire\Breadcrumbs;
use App\Http\Livewire\Buttons;
use App\Http\Livewire\Calendar2;
use App\Http\Livewire\Cards;
use App\Http\Livewire\Carousel;
use App\Http\Livewire\Cart;
use App\Http\Livewire\ChartChartjs;
use App\Http\Livewire\ChartEchart;
use App\Http\Livewire\ChartFlot;
use App\Http\Livewire\ChartMorris;
use App\Http\Livewire\ChartNvd3;
use App\Http\Livewire\Chat;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\ClientCreate;
use App\Http\Livewire\Clients;
use App\Http\Livewire\Colors;
use App\Http\Livewire\Construction;
use App\Http\Livewire\Counters;
use App\Http\Livewire\Datatable;
use App\Http\Livewire\Display;
use App\Http\Livewire\Dropdown;
use App\Http\Livewire\Emptypage;
use App\Http\Livewire\Error404;
use App\Http\Livewire\Error500;
use App\Http\Livewire\Error501;
use App\Http\Livewire\Faq;
use App\Http\Livewire\FileAttachments;
use App\Http\Livewire\FileManager;
use App\Http\Livewire\FileManager1;
use App\Http\Livewire\FileManager2;
use App\Http\Livewire\Flex;
use App\Http\Livewire\Footers;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\FormAdvanced;
use App\Http\Livewire\FormEditable;
use App\Http\Livewire\FormElements;
use App\Http\Livewire\FormLayouts;
use App\Http\Livewire\FormValidation;
use App\Http\Livewire\FormWizard;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Height;
use App\Http\Livewire\Icons;
use App\Http\Livewire\Icons2;
use App\Http\Livewire\Icons3;
use App\Http\Livewire\Icons4;
use App\Http\Livewire\Icons5;
use App\Http\Livewire\Icons6;
use App\Http\Livewire\Icons7;
use App\Http\Livewire\Icons8;
use App\Http\Livewire\Icons9;
use App\Http\Livewire\Icons10;
use App\Http\Livewire\Index;
use App\Http\Livewire\InvoiceCreate;
use App\Http\Livewire\InvoiceDetails;
use App\Http\Livewire\ReceiptDetails; //added
use App\Http\Livewire\OrderDetails; //added
use App\Http\Livewire\NhlsDetails; //added
use App\Http\Livewire\HlsDetails; //added
use App\Http\Livewire\QuotationDetails; //added
use App\Http\Livewire\InvoiceEdit;
use App\Http\Livewire\InvoiceList;
use App\Http\Livewire\InvoiceTimelog;
use App\Http\Livewire\Landing;
use App\Http\Livewire\Loaders;
use App\Http\Livewire\Lockscreen;
use App\Http\Livewire\Login;
use App\Http\Livewire\MailCompose;
use App\Http\Livewire\MailInbox;
use App\Http\Livewire\MailRead;
use App\Http\Livewire\MailSettings;
use App\Http\Livewire\Maps;
use App\Http\Livewire\Maps1;
use App\Http\Livewire\Maps2;
use App\Http\Livewire\Margin;
use App\Http\Livewire\Mediaobject;
use App\Http\Livewire\Modal;
use App\Http\Livewire\Navigation;
use App\Http\Livewire\Notify;
use App\Http\Livewire\Offcanvas;
use App\Http\Livewire\Opacity;
use App\Http\Livewire\Padding;
use App\Http\Livewire\Pagination;
use App\Http\Livewire\Panels;
use App\Http\Livewire\Position;
use App\Http\Livewire\Pricing;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\Products;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Progress;
use App\Http\Livewire\ProjectDetails;
use App\Http\Livewire\ProjectEdit;
use App\Http\Livewire\ProjectNew;
use App\Http\Livewire\Projects;
use App\Http\Livewire\ProjectsList;
use App\Http\Livewire\Rangeslider;
use App\Http\Livewire\Rating;
use App\Http\Livewire\Register;
use App\Http\Livewire\Scroll;
use App\Http\Livewire\Services;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Sweetalert;
use App\Http\Livewire\Switcher;
use App\Http\Livewire\TableEditable;
use App\Http\Livewire\Tables;
use App\Http\Livewire\Tabs;
use App\Http\Livewire\Tags;
use App\Http\Livewire\TaskCreate;
use App\Http\Livewire\TaskEdit;
use App\Http\Livewire\TasksList;
use App\Http\Livewire\Terms;
use App\Http\Livewire\Thumbnails;
use App\Http\Livewire\TicketDetails;
use App\Http\Livewire\Timeline;
use App\Http\Livewire\Tooltipandpopover;
use App\Http\Livewire\Treeview;
use App\Http\Livewire\Typography;
use App\Http\Livewire\UsersList;
use App\Http\Livewire\Width;
use App\Http\Livewire\Wishlist;
use App\Http\Livewire\Wysiwyag;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController; //Blog to BlogController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('livewire.landing'); //start at landing page
});

Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/invoice-old', function () {
    return view('invoice-old');
});
Route::get('about', About::class);
Route::get('accordion', Accordion::class);
Route::get('alerts', Alerts::class);
Route::get('avatar', Avatar::class);
Route::get('background', Background::class);
Route::get('badge', Badge::class);
Route::get('blog-details', BlogDetails::class);
Route::get('blog-edit', BlogEdit::class);
Route::get('blog', [BlogController::class, 'index']);
Route::get('blogdata/{tag}', [BlogController::class, 'blogquery']);

Route::get('border', Border::class);
Route::get('breadcrumbs', Breadcrumbs::class);
Route::get('buttons', Buttons::class);
Route::get('calendar2', Calendar2::class);
Route::get('cards', Cards::class);
Route::get('carousel', Carousel::class);
Route::get('cart', Cart::class);
Route::get('chart-chartjs', ChartChartjs::class);
Route::get('chart-echart', ChartEchart::class);
Route::get('chart-flot', ChartFlot::class);
Route::get('chart-morris', ChartMorris::class);
Route::get('chart-nvd3', ChartNvd3::class);
Route::get('chat', Chat::class);
Route::get('checkout', Checkout::class);
Route::get('client-create', ClientCreate::class);
Route::get('clients', Clients::class);
Route::get('colors', Colors::class);
Route::get('construction', Construction::class);
Route::get('counters', Counters::class);
Route::get('datatable', Datatable::class);
Route::get('display', Display::class);
Route::get('dropdown', Dropdown::class);
Route::get('emptypage', Emptypage::class);
Route::get('error404', Error404::class);
Route::get('error500', Error500::class);
Route::get('error501', Error501::class);
Route::get('faq', Faq::class);
Route::get('file-attachments', FileAttachments::class);
Route::get('file-manager', FileManager::class);
Route::get('file-manager1', FileManager1::class);
Route::get('file-manager2', FileManager2::class);
Route::get('flex', Flex::class);
Route::get('footers', Footers::class);
Route::get('forgot-password', ForgotPassword::class);
Route::get('form-advanced', FormAdvanced::class);
Route::get('form-editable', FormEditable::class);
Route::get('form-elements', FormElements::class);
Route::get('form-layouts', FormLayouts::class);
Route::get('form-validation', FormValidation::class);
Route::get('form-wizard', FormWizard::class);
Route::get('gallery', Gallery::class);
Route::get('height', Height::class);
Route::get('icons', Icons::class);
Route::get('icons2', Icons2::class);
Route::get('icons3', Icons3::class);
Route::get('icons4', Icons4::class);
Route::get('icons5', Icons5::class);
Route::get('icons6', Icons6::class);
Route::get('icons7', Icons7::class);
Route::get('icons8', Icons8::class);
Route::get('icons9', Icons9::class);
Route::get('icons10', Icons10::class);
Route::get('index', Index::class);
Route::get('invoice-create', InvoiceCreate::class);
Route::get('invoice-details', InvoiceDetails::class);
Route::get('receipt-details', ReceiptDetails::class); //added
Route::get('order-details', OrderDetails::class); //added
Route::get('nhls-details', NhlsDetails::class); //added
Route::get('hls-details', HlsDetails::class); //added
Route::get('quotation-details', QuotationDetails::class); //added
Route::get('invoice-edit', InvoiceEdit::class);
Route::get('invoice-list', InvoiceList::class);
Route::get('invoice-timelog', InvoiceTimelog::class);
Route::get('landing', Landing::class);
Route::get('loaders', Loaders::class);
Route::get('lockscreen', Lockscreen::class);
Route::get('login', Login::class);
Route::get('mail-compose', MailCompose::class);
Route::get('mail-inbox', MailInbox::class);
Route::get('mail-read', MailRead::class);
Route::get('mail-settings', MailSettings::class);
Route::get('maps', Maps::class);
Route::get('maps1', Maps1::class);
Route::get('maps2', Maps2::class);
Route::get('margin', Margin::class);
Route::get('mediaobject', Mediaobject::class);
Route::get('modal', Modal::class);
Route::get('navigation', Navigation::class);
Route::get('notify', Notify::class);
Route::get('offcanvas', Offcanvas::class);
Route::get('opacity', Opacity::class);
Route::get('padding', Padding::class);
Route::get('pagination', Pagination::class);
Route::get('panels', Panels::class);
Route::get('position', Position::class);
Route::get('pricing', Pricing::class);
Route::get('product-details', ProductDetails::class);
Route::get('products', Products::class);
Route::get('profile', Profile::class);
Route::get('progress', Progress::class);
Route::get('project-details', ProjectDetails::class);
Route::get('project-edit', ProjectEdit::class);
Route::get('project-new', ProjectNew::class);
Route::get('projects', Projects::class);
Route::get('projects-list', ProjectsList::class);
Route::get('rangeslider', Rangeslider::class);
Route::get('rating', Rating::class);
Route::get('register', Register::class);
Route::get('scroll', Scroll::class);
Route::get('services', Services::class);
Route::get('settings', Settings::class);
Route::get('sweetalert', Sweetalert::class);
Route::get('switcher', Switcher::class);
Route::get('table-editable', TableEditable::class);
Route::get('tables', Tables::class);
Route::get('tabs', Tabs::class);
Route::get('tags', Tags::class);
Route::get('task-create', TaskCreate::class);
Route::get('task-edit', TaskEdit::class);
Route::get('tasks-list', TasksList::class);
Route::get('terms', Terms::class);
Route::get('thumbnails', Thumbnails::class);
Route::get('ticket-details', TicketDetails::class);
Route::get('timeline', Timeline::class);
Route::get('tooltipandpopover', Tooltipandpopover::class);
Route::get('treeview', Treeview::class);
Route::get('typography', Typography::class);
Route::get('users-list', UsersList::class);
Route::get('width', Width::class);
Route::get('wishlist', Wishlist::class);
Route::get('wysiwyag', Wysiwyag::class);
