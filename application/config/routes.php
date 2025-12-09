<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



/*
| -------------------------------------------------------------------------
| Front Routing
| -------------------------------------------------------------------------
*/
$route['about'] = 'AboutController';
$route['contact'] = 'ContactController';

$route['website-design'] = 'ServicesController/website_design';
$route['digital-marketing'] = 'ServicesController/digital_marketing';
$route['mobile-application'] = 'ServicesController/mobile_app';
$route['ecommerce-application-development'] = 'ServicesController/ecommerce_website';
$route['video-production'] = 'ServicesController/video_production';
$route['software-development'] = 'ServicesController/software_development';


/*
| -------------------------------------------------------------------------
| Service Details
| -------------------------------------------------------------------------
*/
$route['static-website-design-services-hyderabad'] = 'ServicesController/Static_Website';
$route['dynamic-website-design-services-hyderabad'] = 'ServicesController/Dynamic_Website';
$route['ecommerce-website-developers-hyderabad'] = 'ServicesController/ECommerce_Website_Development';

$route['seo-service-provider-hyderabad'] = 'ServicesController/SEO_Serices';
$route['social-media-marketing-services-hyderabad'] = 'ServicesController/Social_Media_Agency';
$route['google-ads-services-hyderabad'] = 'ServicesController/Google_Ads_Agency';
$route['content-marketing-services-hyderabad'] = 'ServicesController/Content_Marketing_Services';
$route['email-campaign-management-hyderabad'] = 'ServicesController/EMail_Campaign';

$route['ios-app-development-company-hyderabad'] = 'ServicesController/IOS_Apps';
$route['android-app-development-company-hyderabad'] = 'ServicesController/Android_Apps';
// $route['cross-platform-app-development-services-hyderabad'] = 'ServicesController/Cross_Platform';
// $route['ui-ux-design-company-hyderabad'] = 'ServicesController/UI_UX';
// $route['app-maintenance-company-hyderabad'] = 'ServicesController/App_Maintenance';

$route['single-vendor-website-development-hyderabad'] = 'ServicesController/Single_Vendor';
$route['multi-vendor-website-development-company-hyderabad'] = 'ServicesController/Multi_Vendor';
// $route['custom-multi-vendor-website-development-company-hyderabad'] = 'ServicesController/Custom_Multi_Vendor';

$route['corporate-video-shoot-hyderabad'] = 'ServicesController/Corporate_Video';
$route['promotional-marketing-videos-hyderabad'] = 'ServicesController/Marketing_Video';
$route['event-coverage-videos-highlights-hyderabad'] = 'ServicesController/Event_Coverage';
$route['product-explainer-video-production-hyderabad'] = 'ServicesController/Product_Explainer';
$route['social-media-video-production-hyderabad'] = 'ServicesController/Social_Media_Video';
$route['music-video-shoot-hyderabad'] = 'ServicesController/Music_Video';
$route['short-films-web-series-production-hyderabad'] = 'ServicesController/Short_Films';

$route['crm-software-development-hyderabad'] = 'ServicesController/CRM_Software';
$route['billing-software-development-hyderabad'] = 'ServicesController/Billing_Software';
$route['college-management-software-hyderabad'] = 'ServicesController/College_Management';
$route['learning-management-software-hyderabad'] = 'ServicesController/Learning_Management';


/*
| -------------------------------------------------------------------------
| Packages
| -------------------------------------------------------------------------
*/
$route['ananya-hi-solutions-package'] = 'PackagesController/our_packages';
$route['package-details/(:any)'] = 'PackagesController/package_details';
$route['validate-package'] = 'PackagesController/validate_package';
$route['thank-you'] = 'PackagesController/thank_you';

/*
| -------------------------------------------------------------------------
| Careers
| -------------------------------------------------------------------------
*/
$route['careers'] = 'CareersController';
$route['job-details/(:any)'] = 'CareersController/job_details';
$route['job-application'] = 'CareersController/job_application';
$route['validate-job-application'] = 'CareersController/submit_application';

// Careers Backend
$route['all-hirings'] = 'CareersController/All_Jobs';
$route['new-hiring'] = 'CareersController/new_hiring';
$route['validate-hiring'] = 'CareersController/validate_hiring';

$route['show-hiring-info/(:any)'] = 'CareersController/show_hiring_info';
$route['validate-update-hiring'] = 'CareersController/validate_hiring_info';
$route['hiring-job-delete/(:any)'] = 'CareersController/Delete_Package';

$route['all-applications'] = 'CareersController/all_applications';
$route['delete-applications/(:any)'] = 'CareersController/Delete_Applications';


//One time task for mysql palin pass encryptions
$route['encryption-my-passwords'] = 'LoginController/Hash_Existing_Passwords';

/*
| -------------------------------------------------------------------------
| Auth
| -------------------------------------------------------------------------
*/
$route['owner-login'] = 'LoginController/index';
$route['validate-login'] = 'LoginController/Validate_Login';
$route['logout'] = 'LoginController/Log_Out';




//Authrization
$route['business-dashboard'] = 'DashboardController/index';




//Main Packages
$route['business-packages'] = 'PackageSettingController/Show_Package';
$route['add-business-package'] = 'PackageSettingController/Add_Packages';
$route['validate-business-package'] = 'PackageSettingController/Validate_Package';
$route['packages-delete/(:any)'] = 'PackageSettingController/Delete_Package';

//Packages List
$route['all-packages-list'] = 'PackageSettingController/Show_Package_List';
$route['add-package-list'] = 'PackageSettingController/Add_Package_List';
$route['validate-package-plan'] = 'PackageSettingController/Validate_Package_Plan';



//Package Inquiry
$route['package-inquiries'] = 'PackageSettingController/Package_Inquiries';
$route['package-inquiry-delete/(:any)'] = 'PackageSettingController/Delete_Package_Inquiry';


$route['business-quotations'] = 'QuotationController/All_Quotations';
$route['create-quotation'] = 'QuotationController/Create_Quotations';
// $route['validate-quotation'] = 'QuotationController/Validate_Quotations';
$route['get-package-price'] = 'QuotationController/Get_Package_Price';
$route['show-quotation-informations/(:any)'] = 'QuotationController/Show_Quotation_Informations';
$route['delete-quotations/(:any)'] = 'QuotationController/Delete_Quotations';


/*
| -------------------------------------------------------------------------
| Blogs
| -------------------------------------------------------------------------
*/
