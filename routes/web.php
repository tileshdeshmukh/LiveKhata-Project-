<?php
use App\Http\Controllers\AccountTreeController;
use App\Http\Controllers\CompanyDetailsController;
use App\Http\Controllers\ProductTreeController;
use App\Http\Controllers\SellsinvoiceTreeController;
use App\Http\Controllers\TaxesController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SalesInvoiceController;
use App\Http\Controllers\ServiceBillController;
use App\Http\Controllers\TaxInvoiceServiceController;
use App\Http\Controllers\ShortcutController;
use App\Http\Controllers\showServiceBillsController;
use App\Http\Controllers\compositionBillController;
use App\Http\Controllers\OpeningStockController;
use App\Http\Controllers\shortageStockController;
use App\Http\Controllers\excessStockController;
use App\Http\Controllers\salesOrderController;

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
Route::get('logout1',[AccountTreeController::class,'logOut']);

// Service Bill Documents
Route::get('/estemate', function () { return view('estemate'); });
Route::get('/excessStock', function () { return view('excessStock'); });
Route::get('/openingStock', function () { return view('openingStock'); });
Route::get('/salesInvoice', function () { return view('salesInvoice'); });
Route::get('/salesOrder', function () { return view('salesOrder'); });
Route::get('/shortageStock', function () { return view('shortageStock'); });
Route::get('/compositionBill', function () { return view('compositionBill'); });

// Account Tree
Route::get('groupBy',[AccountTreeController::class,'groupBy']);
Route::get('accountTree',[AccountTreeController::class,'showAccount']);
Route::get('delete/{id}',[AccountTreeController::class,'delete']);
Route::get('deleteGroup/{id}',[AccountTreeController::class,'deleteGroup']);
Route::get('update/{id}',[AccountTreeController::class,'update']);
Route::POST('moveGroup-updated',[AccountTreeController::class,'moveGroup'])->name('moveGroup.update');
Route::get('/accountTreeSearch',[AccountTreeController::class,'accountTreeSearch']);

Route::POST('Account-updated',[AccountTreeController::class,'insertUpdate'])->name('accTreeUpdate.created');
Route::POST('Account-Group',[AccountTreeController::class,'insertAccountGroup'])->name('accountGroup.create');
// Insert
Route::POST('/create-accountTree',[AccountTreeController::class,'addAccountTree'])->name('accTree.created');
Route::POST('/import-accountTree',[AccountTreeController::class,'importAccount'])->name('account.import');
Route::get('/export-accountTree',[AccountTreeController::class,'exportIntoExcel']);

// Product Tree
Route::get('/productTree',[ProductTreeController::class,'showProductTree']);
Route::get('deletePro/{id}',[ProductTreeController::class,'delete']);
Route::POST('moveproductGroup-updated',[ProductTreeController::class,'moveproductGroup'])->name('moveproductGroup.update');
Route::get('updatePro/{id}',[ProductTreeController::class,'update']);
Route::POST('Product-updated',[ProductTreeController::class,'productUpdate'])->name('proTreeUpdate.created');
Route::POST('/create-productTree',[ProductTreeController::class,'addProductTree'])->name('proTree.created');
Route::POST('/Product-Group',[ProductTreeController::class,'insertProductGroup'])->name('productGroup.created');
Route::get('deleteproductGroup/{id}',[ProductTreeController::class,'deleteGroup']);
Route::get('/export-productTree',[ProductTreeController::class,'exportIntoExcel']);
Route::POST('/import-productTree',[ProductTreeController::class,'importProductTree'])->name('productTree.import');
Route::get('/productTreeSearch',[ProductTreeController::class,'productSearch']);

// Taxes
Route::get('/taxes',[TaxesController::class,'showTaxes']);
Route::get('deleteTax/{id}',[TaxesController::class,'delete']);
Route::get('updateTax/{id}',[TaxesController::class,'update']);
Route::POST('tax-updated',[TaxesController::class,'taxUpdate'])->name('taxUpdate.created');
Route::POST('/create-taxes',[TaxesController::class,'addTaxesGroup'])->name('taxesGroup.created');
Route::get('/taxSearch',[TaxesController::class,'taxSearch']);
Route::get('/export-taxes',[TaxesController::class,'exportIntoExcel']);
Route::POST('/import-taxes',[TaxesController::class,'importTaxes'])->name('taxes.import');

// Brand
Route::get('/brand',[BrandController::class,'showBrand']);
Route::get('deleteBrand/{id}',[BrandController::class,'delete']);
Route::get('updateBrand/{id}',[BrandController::class,'update']);
Route::POST('brand-updated',[BrandController::class,'brandUpdate'])->name('brandUpdate.created');
Route::get('/brandSearch',[BrandController::class,'brandSearch']);
Route::POST('/create-brand',[BrandController::class,'addBrand'])->name('brandGroup.created');
Route::get('/export-brand',[BrandController::class,'exportIntoExcel']);
Route::POST('/import-brand',[BrandController::class,'importBrand'])->name('brand.import');

// Size
Route::get('/size',[SizeController::class,'showSize']);
Route::get('deleteSize/{id}',[SizeController::class,'delete']);
Route::get('updateSize/{id}',[SizeController::class,'update']);
Route::delete('size-delete',[SizeController::class,'deleteAll'])->name('size.deleteAll');
Route::POST('size-updated',[SizeController::class,'sizeUpdate'])->name('sizeUpdate.created');
Route::POST('/create-size',[SizeController::class,'addSize'])->name('size.created');
Route::get('/sizeSearch',[SizeController::class,'sizeSearch']);
Route::POST('/import-size',[SizeController::class,'importSize'])->name('size.import');
Route::get('/export-size',[SizeController::class,'exportIntoExcel']);

// Salesman
Route::get('/salesman',[SalesmanController::class,'showSalesman']);
Route::get('deleteSalesman/{id}',[SalesmanController::class,'delete']);
Route::get('updateSalesman/{id}',[SalesmanController::class,'update']);
Route::POST('salesman-updated',[SalesmanController::class,'salesmanUpdate'])->name('salesmanUpdate.created');
Route::POST('/create-salesman',[SalesmanController::class,'addSalesman'])->name('salesman.created');
Route::get('/salesmanSearch',[SalesmanController::class,'salesmanSearch']);

Route::get('/export-salesman',[SalesmanController::class,'exportIntoExcel']);
Route::POST('/import-salesman',[SalesmanController::class,'importSalesman'])->name('salesman.import');


// Warehouse
Route::get('/warehouse',[WarehouseController::class,'showWarehouse']);
Route::get('deleteWarehouse/{id}',[WarehouseController::class,'delete']);
Route::get('updateWarehouse/{id}',[WarehouseController::class,'update']);
Route::POST('warehouse-updated',[WarehouseController::class,'warehouseUpdate'])->name('warehouseUpdate.created');
Route::POST('/create-warehouse',[WarehouseController::class,'addWarehouse'])->name('warehouse.created');
Route::get('/warehouseSearch',[WarehouseController::class,'warehouseSearch']);

Route::get('/export-warehouse',[WarehouseController::class,'exportIntoExcel']);
Route::POST('/import-warehouse',[WarehouseController::class,'importWarehouse'])->name('warehouse.import');

// Department
Route::get('/department',[DepartmentController::class,'showDepartment']);
Route::get('deleteDepartment/{id}',[DepartmentController::class,'delete']);
Route::get('updateDepartment/{id}',[DepartmentController::class,'update']);
Route::get('/department-1',[DepartmentController::class,'searchDepartment'])->name('departmentSearch.created');
Route::POST('Department-updated',[DepartmentController::class,'departmentUpdate'])->name('departmentUpdate.created');
Route::POST('/create-department',[DepartmentController::class,'addDepartment'])->name('department.created');
Route::get('departmentSearch',[DepartmentController::class,'departmentSearch']);

Route::get('/export-department',[DepartmentController::class,'exportIntoExcel']);
Route::POST('/import-department',[DepartmentController::class,'importDepartment'])->name('department.import');

// Sales Invoice
Route::get('/salesInvoice',[SalesInvoiceController::class,'showSalesInvoice']);
Route::POST('/create-salesInvoice',[SalesInvoiceController::class,'addSalesInvoice'])->name('salesInvoice.created');


Route::get('serviceBill/serviceBillInvoice/{id}',[ServiceBillController::class,'showTaxInvoiceServicePDF']);
// Service Bill
Route::get('/serviceBill/{i?}',[ServiceBillController::class,'showServiceBill']);
Route::get('fetchServiceBill/{id}',[ServiceBillController::class,'fetchServiceBill']);
Route::POST('serviceBill-created',[ServiceBillController::class,'addServiceBill'])->name('serviceBill.created');
Route::POST('/create-serviceBillproductTree',[ServiceBillController::class,'addProductTree'])->name('serviceBillproTree.created');
Route::POST('/create-serviceBillaccountTree',[ServiceBillController::class,'addAccountTree'])->name('serviceBillaccTree.created');

// Composition Bill 
Route::get('/compositionBill',[compositionBillController::class,'showServiceBill']);
Route::get('/compositionBill/{i?}',[compositionBillController::class,'showServiceBillPreview']);
Route::POST('compositionBill-created',[compositionBillController::class,'addServiceBill'])->name('compositionBill-created');
Route::POST('/create-serviceBillproductTree',[compositionBillController::class,'addProductTree'])->name('serviceBillproTree.created');
Route::POST('/create-serviceBillaccountTree',[compositionBillController::class,'addAccountTree'])->name('serviceBillaccTree.created');
// PDF
Route::get('compositionBill/compositionBillInvoice/{id}',[compositionBillController::class,'showTaxInvoiceServicePDF']);

// Opening Stock
Route::get('/openingStock',[OpeningStockController::class,'showServiceBill']);
Route::get('/openingStock/{i?}',[OpeningStockController::class,'showServiceBillPreview']);
Route::POST('openingStock-created',[OpeningStockController::class,'addServiceBill'])->name('openingstock-created');
Route::POST('/create-serviceBillproductTree',[OpeningStockController::class,'addProductTree'])->name('serviceBillproTree.created');
Route::POST('/create-serviceBillaccountTree',[OpeningStockController::class,'addAccountTree'])->name('serviceBillaccTree.created');
// PDF
Route::get('openingStock/openingStockInvoice/{id}',[OpeningStockController::class,'showTaxInvoiceServicePDF']);


// Shortage Stock 
Route::get('/shortageStock',[shortageStockController::class,'showServiceBill']);
Route::get('/shortageStock/{i?}',[shortageStockController::class,'showServiceBillPreview']);
// Route::get('fetchServiceBill/{id}',[compositionBillController::class,'fetchServiceBill']);
Route::POST('shortageStock-created',[shortageStockController::class,'addServiceBill'])->name('shortageStock-created');
// Route::get('/servicebill-sms/{SMS?}',[OpeningStockController::class,'sendSms']);
Route::POST('/create-serviceBillproductTree',[shortageStockController::class,'addProductTree'])->name('serviceBillproTree.created');
Route::POST('/create-serviceBillaccountTree',[shortageStockController::class,'addAccountTree'])->name('serviceBillaccTree.created');
// PDF
Route::get('shortageStock/shortageStockInvoice/{id}',[shortageStockController::class,'showTaxInvoiceServicePDF']);


// excess Stock
Route::get('/excessStock',[excessStockController::class,'showServiceBill']);
Route::get('/excessStock/{i?}',[excessStockController::class,'showServiceBillPreview']);
Route::POST('excessStock-created',[excessStockController::class,'addServiceBill'])->name('excessStock-created');
Route::POST('/create-serviceBillproductTree',[excessStockController::class,'addProductTree'])->name('serviceBillproTree.created');
Route::POST('/create-serviceBillaccountTree',[excessStockController::class,'addAccountTree'])->name('serviceBillaccTree.created');
// PDF
Route::get('excessStock/excessStockInvoice/{id}',[excessStockController::class,'showTaxInvoiceServicePDF']);


// sales Order
Route::get('/salesOrder',[salesOrderController::class,'showServiceBill']);
Route::get('/salesOrder/{i?}',[salesOrderController::class,'showServiceBillPreview']);
Route::POST('salesOrder-created',[salesOrderController::class,'addServiceBill'])->name('salesOrder-created');
Route::POST('/create-serviceBillproductTree',[salesOrderController::class,'addProductTree'])->name('serviceBillproTree.created');
Route::POST('/create-serviceBillaccountTree',[salesOrderController::class,'addAccountTree'])->name('serviceBillaccTree.created');
// PDF
Route::get('salesOrder/salesOrderInvoice/{id}',[salesOrderController::class,'showTaxInvoiceServicePDF']);


//Tax Invoice Service
Route::get('/taxInvoiceService/{i?}',[TaxInvoiceServiceController::class,'showTaxInvoice']);
Route::POST('/taxInvoiceService-created',[TaxInvoiceServiceController::class,'addTaxInvoiceServiceBill'])->name('taxInvoiceService.created');
// Route::get('serviceBill/taxInvoiceServicePDF/{id}',[TaxInvoiceServiceController::class,'showTaxInvoiceServicePDF']);
// ********** taxServiceBillInvoice
Route::get('taxInvoiceService/taxServiceBillInvoice/{id}',[TaxInvoiceServiceController::class,'showTaxInvoiceServicePDF']);

Route::get('/pdfserviceBill/{id}',[TaxInvoiceServiceController::class,'createTaxInvoiceServicePDF']); 

// Company Details 
Route::get('/companyDetails',[CompanyDetailsController::class,'showCompany']);
Route::POST('/companyUpdate',[CompanyDetailsController::class,'updateCmp'])->name('companyUpdate.created');
Route::POST('/create-companyDetails',[CompanyDetailsController::class,'addCompanyDetails'])->name('cmpDetails.created');

Route::get('/showBills',[showServiceBillsController::class,'serviceBillFetch']);
// Route::get('/servicebill-fetch/{id?}',[ServiceBillController::class,'']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shortcuts/{data?}', [ShortcutController::class,'createShortcuts']);
Route::get('deleteShortcutName/{id}',[ShortcutController::class,'delete']);

