-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2025 at 11:30 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u411161769_ananya2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `hiring_application_tbls`
--

CREATE TABLE `hiring_application_tbls` (
  `id` int(11) NOT NULL,
  `applied_for` varchar(255) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `submited_on` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiring_application_tbls`
--

INSERT INTO `hiring_application_tbls` (`id`, `applied_for`, `full_name`, `email`, `phone`, `full_address`, `resume`, `submited_on`) VALUES
(7, 'Content Writer', 'chandan kumar dubey', 'brandwavestuio@gmail.com', '7970422464', 'jamshedpur', 'uploads/resumes/Vishal_Birwal.pdf', '2025-12-09 11:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_tbls`
--

CREATE TABLE `hiring_tbls` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `job_status` varchar(5) NOT NULL DEFAULT 'yes',
  `job_display` varchar(5) NOT NULL DEFAULT 'yes',
  `posted_date` varchar(100) NOT NULL,
  `posted_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiring_tbls`
--

INSERT INTO `hiring_tbls` (`id`, `job_title`, `qualification`, `experience`, `location`, `job_description`, `job_status`, `job_display`, `posted_date`, `posted_by`) VALUES
(5, 'Content Creator', 'B.Sc', 'Min 2 yrs', 'Hyderabad, Telangana', '<p>Join our dynamic team as a Lead Content Writer where you will leverage your expertise in script writing content and copy writing and UX writing to craft compelling narratives that align with our content strategy. With 2 years of experience you will play a pivotal role in enhancing user engagement and driving brand consistency. This is an office-based role with no travel required offering a day shift schedule.</p><h3><strong>Experience :</strong>&nbsp;</h3><p>2 years</p><h3><strong>Required Skills :</strong>&nbsp;</h3><ol><li>Technical Skills: Script Writing Content and copy writing UX Writing Content Strategy&nbsp;</li><li>Technology : Digital Learning</li><li>Shift :<strong> </strong>Day</li></ol><h3><strong>Responsibilities :</strong></h3><ol><li>Develop and implement content strategies that align with the company\'s objectives and enhance user engagement.</li><li>Collaborate with cross-functional teams to create cohesive and compelling content across various platforms.</li><li>Lead the script writing process for multimedia projects ensuring clarity and engagement.</li><li>Oversee the creation of copy that resonates with target audiences and drives brand consistency.</li><li>Provide UX writing expertise to enhance user experience and interface design.</li><li>Conduct thorough research to inform content creation and ensure accuracy and relevance.</li><li>Analyze content performance metrics to refine strategies and improve outcomes.</li><li>Mentor junior writers providing guidance and feedback to enhance their skills.</li><li>Ensure all content adheres to brand guidelines and maintains a consistent voice.</li><li>Stay updated with industry trends to incorporate innovative approaches in content creation.</li><li>Manage multiple projects simultaneously ensuring timely delivery and quality standards.</li><li>Collaborate with designers and developers to ensure content is effectively integrated into digital platforms.</li><li>Facilitate workshops and brainstorming sessions to generate creative content ideas. Qualifications -</li><li>Possess a strong background in script writing content and copy writing and UX writing.</li><li>Demonstrate expertise in developing and executing content strategies.</li><li>Exhibit excellent communication and collaboration skills.</li><li>Have a keen eye for detail and a passion for storytelling.</li><li>Show proficiency in using content management systems and analytics tools.</li></ol><h3><strong>Job Location :&nbsp;</strong></h3><p>Begumpet, Hyderabad</p><h3><strong>Job Type :</strong>&nbsp;</h3><p>Content Writer</p><p>&nbsp;</p>', 'yes', 'yes', '2025-12-09', 'Mr. Sanjay');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbls`
--

CREATE TABLE `login_tbls` (
  `id` int(11) NOT NULL,
  `email_id` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `permission` varchar(20) NOT NULL DEFAULT 'yes',
  `login_type` varchar(10) NOT NULL,
  `updated_date` varchar(30) NOT NULL,
  `updated_by` varchar(80) NOT NULL,
  `added_date` varchar(30) NOT NULL,
  `added_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tbls`
--

INSERT INTO `login_tbls` (`id`, `email_id`, `password`, `user_name`, `permission`, `login_type`, `updated_date`, `updated_by`, `added_date`, `added_by`) VALUES
(1, 'owner@gmail.com', '$2y$10$z2CSgaGAZ64NDGKHyW8erOGzs7TjrZeGXfnuWw6cVJam6ER4Gg10q', 'Mr. Raja Vardhaman', 'yes', 'owner', '', '', '', ''),
(2, 'admin@gmail.com', '$2y$10$ZdYSShCcShVo6FeX0/ba..obQK..sjWenNllBjnNNulnRm6WhLueu', 'Mr. Sanjay', 'yes', 'admin', '', '', '', ''),
(3, 'editor@gmail.com', '$2y$10$capu7M58uTTGUMkknEVr8ufdVx5Xob2Ngg1DQWF.UBevH0CX302xS', 'Mr. Chandan', 'yes', 'editor', '', '', '', ''),
(4, 'Sravan.2226@gmail.com', '$2y$10$ZdYSShCcShVo6FeX0/ba..obQK..sjWenNllBjnNNulnRm6WhLueu', 'Sravan', 'yes', 'admin', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `package_leads`
--

CREATE TABLE `package_leads` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(80) NOT NULL,
  `email_id` varchar(80) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `services` varchar(255) NOT NULL,
  `traffic_platform` varchar(80) NOT NULL,
  `created_at` varchar(80) NOT NULL,
  `created_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_leads`
--

INSERT INTO `package_leads` (`id`, `customer_name`, `email_id`, `phone_no`, `services`, `traffic_platform`, `created_at`, `created_by`) VALUES
(2, 'Raja Vardhaman', 'brandwavestuio@gmail.com', '7970422464', 'Social Media Marketing', 'Instagram', '21st Oct, 2025', 'website'),
(3, 'Pynda Raja Vardhaman', 'Hiring@ananyahisolutions.com', '8106665646', 'Social Media Marketing', 'Facebook', '24th Oct, 2025', 'website'),
(4, 'Pynda Raja Vardhaman', 'Hiring@ananyahisolutions.com', '8106665646', 'Social Media Marketing', 'Facebook', '24th Oct, 2025', 'website'),
(5, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Dynamic Website', 'Instagram', '30th Oct, 2025', 'website'),
(6, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Website Package', 'Instagram', '30th Oct, 2025', 'website'),
(7, 'Raja Vardhaman', 'hariteja2027@gmail.com', '7970422464', 'Starter Static Website', 'YouTube', '30th Oct, 2025', 'website'),
(8, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Website Package', 'Instagram', '30th Oct, 2025', 'website'),
(9, 'Raja Vardhaman', 'hariteja2027@gmail.com', '9878767656', 'Search Engine Optimization (SEO)', 'LinkedIn', '30th Oct, 2025', 'website'),
(10, 'Raja Vardhaman', 'hariteja2027@gmail.com', '8143081997', 'Social Media Marketing', 'Facebook', '30th Oct, 2025', 'website'),
(11, 'Raja Vardhaman', 'hariteja2027@gmail.com', '8083222464', 'Google Ads / PPC', 'Website', '30th Oct, 2025', 'website'),
(12, 'Raja Vardhaman', 'hariteja2027@gmail.com', '9878767656', 'Starter Static Website', 'Website', '30th Oct, 2025', 'website'),
(13, 'Raja Vardhaman', 'brandwavestuio@gmail.com', '8143081997', 'Dynamic Website', 'LinkedIn', '30th Oct, 2025', 'website'),
(14, 'Raja Vardhaman', 'hariteja2027@gmail.com', '9977666777', 'E-Commerce Store', 'LinkedIn', '30th Oct, 2025', 'website'),
(15, 'Raja Vardhaman', 'hariteja2027@gmail.com', '7970422464', 'E-Commerce Store', 'YouTube', '30th Oct, 2025', 'website'),
(16, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Website Package', 'YouTube', '31st Oct, 2025', 'website'),
(17, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'Instagram', '31st Oct, 2025', 'website'),
(18, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Website Package', 'Instagram', '31st Oct, 2025', 'website'),
(19, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Website Package', 'YouTube', '31st Oct, 2025', 'website'),
(20, 'Pynda Raja Vardhaman', 'Ananyahisolutions@gmail.com', '8106665646', 'Website Package', 'LinkedIn', '31st Oct, 2025', 'website'),
(21, 'Raja vedrhaman', 'Abc@gmail.com', '0000000000', 'E-Commerce Store', 'Website', '4th Nov, 2025', 'website'),
(22, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'Instagram', '6th Nov, 2025', 'website'),
(23, 'Bhanu Prathap', 'bhanudiwanji@gmail.com', '9666994443', 'Starter Static Website', 'Website', '8th Nov, 2025', 'website'),
(24, 'Bhanu Prathap', 'bhanudiwanji@gmail.com', '9666994443', 'Social Media Marketing', 'Website', '8th Nov, 2025', 'website'),
(25, 'Raja Vardhaman', 'ahs97sanjay@gmail.com', '1234567890', 'Starter Static Website', 'Instagram', '8th Nov, 2025', 'website'),
(26, 'raja verdhaman', 'raju@gmail.com', '9898787676', 'Dynamic Website', 'Website', '9th Nov, 2025', 'website'),
(27, 'Bhanu Prathap Diwanji', 'bhanudiwanji@gmail.com', '9666994443', 'Social Media Marketing', 'Website', '10th Nov, 2025', 'website'),
(28, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Search Engine Optimization (SEO)', 'Instagram', '10th Nov, 2025', 'website'),
(29, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'Facebook', '10th Nov, 2025', 'website'),
(30, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'Facebook', '10th Nov, 2025', 'website'),
(31, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Google Ads / PPC', 'Instagram', '10th Nov, 2025', 'website'),
(32, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Search Engine Optimization (SEO)', 'YouTube', '11th Nov, 2025', 'website'),
(33, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'Instagram', '11th Nov, 2025', 'website'),
(34, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'YouTube', '11th Nov, 2025', 'website'),
(35, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Search Engine Optimization (SEO)', 'YouTube', '24th Nov, 2025', 'website'),
(36, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Social Media Marketing', 'Facebook', '24th Nov, 2025', 'website'),
(37, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Starter Static Website', 'Instagram', '25th Nov, 2025', 'website'),
(38, 'Mad academy', 'madacademy123@gmail.com', '7416198555', 'Social Media Marketing', 'Friend / Referral', '25th Nov, 2025', 'website'),
(39, 'Mad academy', 'madacademy123@gmail.com', '7416198555', 'Search Engine Optimization (SEO)', 'Friend / Referral', '25th Nov, 2025', 'website'),
(40, 'Raja Vardhaman', 'rajavardhaman108@gmail.com', '08106665646', 'Starter Static Website', 'Instagram', '28th Nov, 2025', 'website'),
(41, 'sujit mridha', 'sujit92@gmail.com', '8787676565', 'Social Media Marketing', 'LinkedIn', '28th Nov, 2025', 'website'),
(42, 'Pran', 'pran4e@gmail.com', '1234567890', 'Search Engine Optimization (SEO)', 'Other', '2nd Dec, 2025', 'website'),
(43, 'ganesh', 'ganesh2131@gmail.com', '9981234512', 'Social Media Marketing', 'Friend / Referral', '3rd Dec, 2025', 'website'),
(44, 'ganesh', 'ganesh2131@gmail.com', '9981234512', 'Search Engine Optimization (SEO)', 'Friend / Referral', '3rd Dec, 2025', 'website'),
(45, 'rajes K', 'kallemrajesh5657@gmail.com', '9701123344', 'Google Ads / PPC', 'Other', '3rd Dec, 2025', 'website'),
(46, 'Chandan Kumar Dubey', 'brandwavestudio@gmail.com', '7970422464', 'Social Media Marketing', 'Instagram', '3rd Dec, 2025', 'website'),
(47, 'vishwa', 'account@corpdecks.in', '9553222622', 'Dynamic Website', 'Website', '8th Dec, 2025', 'website');

-- --------------------------------------------------------

--
-- Table structure for table `package_list_tbls`
--

CREATE TABLE `package_list_tbls` (
  `id` int(11) NOT NULL,
  `package_parent_slug` varchar(255) NOT NULL,
  `package_price` varchar(20) NOT NULL,
  `package_full_details` text NOT NULL,
  `visibility` varchar(10) NOT NULL DEFAULT 'yes',
  `package_type_slug` varchar(255) NOT NULL,
  `updated_date` varchar(20) NOT NULL,
  `updated_by` varchar(80) NOT NULL,
  `added_date` varchar(20) NOT NULL,
  `added_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_list_tbls`
--

INSERT INTO `package_list_tbls` (`id`, `package_parent_slug`, `package_price`, `package_full_details`, `visibility`, `package_type_slug`, `updated_date`, `updated_by`, `added_date`, `added_by`) VALUES
(1, 'social-media-marketing-package-hyderabad', '9999', '[\"Facebook & Instagram Platform\",\"Social Media Audit for All Platforms\",\"Basic 8 to 12 Creative Design Per Month\",\"1 Revision per Post\",\"2 to 4 Reels Per Month\",\"Monthly Performance Report\",\"Trending-Based Creative Posts\",\"Festival & National Day Posts(creative posters for special occasions)\",\"Description, Hashtag Research & Optimization\",\"AI-Powered Creative\",\"Profile Optimization\",\"Ad Manager (Setup)\",\"Paid Ad Campaigns(Setup & Manage FB\\/IG Ads Campaigns)\",\"Audience Targeting\",\"Ad Budget Management(Daily\\/weekly Budget Allocation & Ad Optimization)\",\"Audience Research(Demographics, Interests & Behavior Insights)\",\"Best ROI\",\"Campaign Objectives\"]', 'yes', 'basic-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(2, 'social-media-marketing-package-hyderabad', '14999', '[\"Facebook, Instagram & Google My Business Platform\",\"Social Media Audit for All Platforms\",\"Standard 15 to 20 Creative Design Per Month\",\"2 Revision per Post\",\"6 to 8 Reels Per Month\",\"Standard Content Calendar Creation\",\"Monthly Performance Report\",\"Trending-Based Creative Posts\",\"Festival & National Day Posts(creative posters for special occasions)\",\"Description, Hashtag Research & Optimization\",\"AI-Powered Creative\",\"Profile Optimization\",\"Meta Business Suite(Setup)\",\"Ad Manager (Setup)\",\"Paid Ad Campaigns(Setup & Manage FB\\/IG Ads Campaigns)\",\"Audience Targeting\",\"Ad Budget Management(Daily\\/weekly Budget Allocation & Ad Optimization)\",\"Audience Research(Demographics, Interests & Behavior Insights)\",\"Best ROI\",\"Campaign Objectives\"]', 'yes', 'standard-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(3, 'social-media-marketing-package-hyderabad', '19999', '[\"Facebook, Instagram, Google My Business, LinkedIn, Twitter(X)\",\"Social Media Audit for All Platforms\",\"Premium 25 to 30 Creative Design Per Month\",\"3 Revision per Post\",\"12 to 15 Reels Per Month\",\"Premium Content Calendar Creation\",\"Weekly Performance Report\",\"Trending-Based Creative Posts\",\"Festival & National Day Posts(creative posters for special occasions)\",\"Description, Hashtag Research & Optimization\",\"AI-Powered Creative\",\"Profile Optimization\",\"Meta Business Suite(Setup)\",\"Ad Manager (Setup)\",\"Paid Ad Campaigns(Setup & Manage FB\\/IG Ads Campaigns)\",\"Audience Targeting\",\"Ad Budget Management(Daily\\/weekly Budget Allocation & Ad Optimization)\",\"Audience Research(Demographics, Interests & Behavior Insights)\",\"ROI Funnel Strategy\",\"Campaign Objectives\",\"Brand Health Check Across All Platforms\",\"Competitor & Market Research\",\"Google Review Posting\\/ Video Review\",\"Community Building\",\"Analytics, Performance Monitoring & Reporting\",\"Business Manager(Setup)\",\"Remarketing\",\"Pixel Setup\",\"Ads A\\/B Testing(Testing Different Creatives, Copies, CTA)\",\"Conversion & ROI Tracking\",\"Ad Creative Design(Images, Videos, Carousel Ads)\",\"Strategy & Planning\",\"High Conversion\",\"Ad Placement(Optimize Auto\\/Manual Placements Across Mobile\\/ Tablet and Computer)\",\"Dedicated Marketing Manager\"]', 'yes', 'premium-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(4, 'google-ads-package-hyderabad', '7999', '[\"Campaign Setup for Search Ads\",\"Daily Ads Optimization\",\"Budget Optimization Guidance\",\"Basic Keyword Research (8\\u201310 keywords)\",\"Ad Copywriting (Up to 3 Ad Variations)\",\"Location Targeting Setup\",\"Ad Extensions Setup (Call, Location, Sitelink)\",\"Conversion Tracking Setup\",\"Weekly Performance Report\",\"Budget Optimization Guidance\",\"Click & Conversion Analysis\",\"Monthly Report & Insights\"]', 'yes', 'basic-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(5, 'google-ads-package-hyderabad', '14999', '[\"Everything in Basic\",\"Campaign Setup for Search & Display Ads\",\"Advanced Keyword Research (15\\u201320 keywords)\",\"Ad Copywriting (Up to 5 Ad Variations)\",\"Location & Device Targeting Setup\",\"Ad Extensions Setup (Call, Location, Sitelink, Callout)\",\"Conversion Tracking Setup\",\"Daily Ads Optimization & Bid Adjustments\",\"A\\/B Testing for Ads & Landing Pages\",\"Competitor Ads Analysis\",\"Advanced Negative Keywords Optimization\",\"Monthly Performance Report & ROI Insights\",\"Dedicated Google Ads Manager\"]', 'yes', 'standard-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(6, 'google-ads-package-hyderabad', '24999', '[\"Everything in Standard\",\"Campaign Setup for Search, Display & Shopping Ads\",\"Comprehensive Keyword Research (50+ keywords)\",\"Ad Copywriting & Creative Banner Design\",\"Audience Segmentation & Demographic Targeting\",\"A\\/B Testing for Ads, Landing Pages & CTAs\",\"CRO Suggestions\",\"Remarketing Setup (Visitors Retargeting)\",\"Conversion Rate Optimization Suggestions\",\"Advanced Negative Keywords Optimization\",\"Pixel & Conversion Tracking Setup\",\"Daily Ads Optimization & Bid Management\",\"Competitor & Market Analysis\",\"Weekly Performance Reports & Recommendations\",\"ROI Funnel Strategy & Scaling Consultation\",\"Shopping Ads (for eCommerce)\",\"YouTube Video Ads Setup (Optional)\",\"Dedicated Senior Google Ads Specialist\",\"High Conversion Strategy & Planning\"]', 'yes', 'premium-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(7, 'seo-package-hyderabad', '9999', '[\"Website SEO Audit & Report\",\"Basic Keyword Research (10\\u201315 Keywords)\",\"On-Page Optimization (Meta Tags, Titles, Descriptions)\",\"Technical SEO Setup (Robots.txt, Sitemap, Canonical Tags)\",\"Google Search Console & Analytics Setup\",\"Mobile & Page Speed Optimization\",\"Image Optimization (Alt Tags & Compression)\",\"Internal Linking Optimization\",\"Local SEO Setup (Google My Business Optimization)\",\"Monthly Ranking Performance Report\",\"Basic Backlink Suggestions\",\"Competitor Keyword Overview\",\"Best ROI-Focused SEO Strategy\"]', 'yes', 'basic-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(8, 'seo-package-hyderabad', '14999', '[\"Everything in Basic\",\"Advanced Keyword Research (20\\u201330 Keywords)\",\"Comprehensive On-Page SEO (Schema, Structured Data, OG Tags)\",\"Technical SEO Audit & Fixes\",\"Off-Page SEO\",\"High-Quality Backlink Building (10\\u201315 Links\\/Month)\",\"Local SEO Optimization\",\"Google My Business Optimization & Posting (4 Posts\\/Month)\",\"Content Optimization for Existing Pages\",\"Landing Page SEO Recommendations\",\"Monthly Keyword Ranking Report\",\"Competitor SEO Analysis & Strategy\",\"Image, Video & Blog SEO Optimization\",\"Dedicated SEO Account Manager\",\"Best ROI-Focused SEO Strategy\"]', 'yes', 'standard-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(9, 'seo-package-hyderabad', '22999', '[\"Everything in Standard\",\"Advanced Keyword Research (40+ Keywords)\",\"Content Strategy & Blog Writing (Up to 4 Blogs\\/Month)\",\"Authority Backlink Building (30+ High-DA Links\\/Month)\",\"Guest Posting & Outreach Campaigns\",\"Advanced Technical SEO (Core Web Vitals, Crawl Budget Optimization)\",\"Local SEO Domination for Hyderabad (Citations, Reviews, NAP Consistency)\",\"Competitor Gap Analysis & Content Clusters\",\"Conversion Rate Optimization (CRO) Suggestions\",\"Schema Markup Implementation (FAQ, Product, Review, Local)\",\"Monthly Detailed SEO Reports & Growth Insights\",\"E-commerce \\/ Service Page SEO Optimization\",\"Brand Visibility & Reputation Management\",\"Dedicated Senior SEO Expert & Strategy Consultation\",\"High Conversion SEO Strategy & Continuous Monitoring\",\"Best ROI-Focused SEO Campaig\"]', 'yes', 'premium-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(10, 'static-website-package-hyderabad', '3999', '[\"Single Page Website (Scrolling Layout)\",\"Modern Mobile-Friendly Design\",\"Eye-Catching Hero Banner with CTA Button\",\"Business Info, Services, Gallery & Contact Section\",\"WhatsApp & Call Button Integration\",\"Free Contact Form Setup (Email or WhatsApp Lead)\",\"Social Media Links Integration\",\"Basic SEO Setup (Meta Title, Description, Keywords)\",\"Google Map Embed for Location\",\"Delivery Within 3 Working Days\",\"1 Free Revision\",\"Perfect for Startups, Freelancers & Local Businesses\",\"Mobile-Friendly\\/Responsive Design\",\"Effective Call-To-Actions & Easy Navigation\",\"Brand Typography & Color Code\",\"Complete Deployment\"]', 'yes', 'basic-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(11, 'static-website-package-hyderabad', '7999', '[\"Everything in Basic\",\"Free Hosting & SSL for 1 Year\",\"Up to 5 Pages, Extra Per Page Cost not Included (Home, About, Services, Gallery, Contact)\",\"Custom Brand-Based Design & Color Theme\",\"Optimized Image & Banner Design\",\"Basic On-Page SEO Optimization\",\"Google Analytics & Search Console Integration\",\"Faster Loading (Speed Optimization)\",\"Lead Capture Form with Email Alerts\",\"1 Month Free Maintenance Support\",\"Delivery Within 5\\u20137 Working Days\",\"Great for Local Businesses & Agencies\"]', 'yes', 'standard-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(12, 'static-website-package-hyderabad', '9999', '[\"Everything in Standard\",\"Up to 8 Static Website Pages(Extra Per Page Cost not Included)\",\"Advanced UI\\/UX Design with Animation & Motion Effects\",\"SEO-Optimized Structure for Higher Google Ranking\",\"Content Writing Support (Up to 800 Words)\",\"Interactive Elements (Counters, Sliders, Reviews, etc.)\",\"Call-to-Action Strategy for More Leads\",\"Google Business Profile Setup Assistance\",\"Priority Support with Faster Delivery\",\"Delivery Within 10\\u201315 Working Days\",\"Google Page Speed Optimized (Loads Fast Even on Week Networks)\",\"Unlimited Copyright-Free Stock Images\",\"Copyright-Free Unique Website Content\",\"SEO Optimized Code (Semantic Tags & Meta Tags)\",\"Secure & Error-Free Coding\",\"Unique User Interactive UI\\/UX\",\"UI\\/UX Testing\",\"Browser Compatibility Testing\",\"Less Scroll for Better User Experience\",\"Minified CSS\\/JS\",\"Perfect for Professionals & Established Businesses\"]', 'yes', 'premium-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(13, 'dynamic-website-package-hyderabad', '14999', '[\"Dynamic 4\\u20135 Page Website with Admin Panel\",\"Free SSL Certificate for 1 Year\",\"Free Web Hosting for 1 Year\",\"Effective Call-To-Actions & Easy Navigation\",\"User-Friendly Admin Dashboard (Add\\/Edit\\/Delete Content)\",\"Mobile-Friendly \\/ Responsive Design\",\"Google PageSpeed Optimized\",\"Google Map, WhatsApp & Social Media Integration\",\"SEO Optimized Code (Meta Title, Description, Keywords)\",\"Copyright-Free Stock Images\",\"Contact Form for Capturing Business Leads\",\"Secure & Error-Free Coding\",\"Fast Loading Speed Optimization\",\"1 Week Free Support After Deployment\",\"Delivery Within 10\\u201315 Working Days\",\"Complete Deployment\",\"Perfect for Local Businesses & Startups\"]', 'yes', 'basic-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(14, 'dynamic-website-package-hyderabad', '24999', '[\"Everything in Basic\",\"Up to 10 Dynamic Pages (Extra Page Cost \\u20b9800\\/Page)\",\"Advanced Admin Panel with User Management\",\"Unlimited Dynamic Web Pages (CMS Ready)\",\"Dynamic Content Rendering (Real-Time Updates)\",\"Brand Typography & Color Code Customization\",\"Google Analytics & Search Console Integration\",\"Effective Call-To-Actions & Lead Conversion Layouts\",\"Content Optimization for Better Search Ranking\",\"Browser Compatibility Testing (All Devices)\",\"Minified CSS\\/JS for Faster Performance\",\"Database Integration with Error-Free Validation\",\"Secure Admin Authentication & Authorization\",\"2 Weeks Free Support After Deployment\",\"Ideal for Growing Businesses & Agencies\"]', 'yes', 'standard-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(15, 'dynamic-website-package-hyderabad', '34999', '[\"Everything in Standard\",\"Custom UI\\/UX Design with Interactive Animations\",\"Dynamic Modules (Blogs, Services, Testimonials, Gallery, etc.)\",\"Admin Dashboard with Full CRUD Functionality\",\"Role-Based Admin Access (Multiple User Levels)\",\"SEO-Friendly URL Structure & Schema Markup\",\"Unlimited Dynamic Content & Media Uploads\",\"Comprehensive Security (Form Validation, CSRF, XSS Protection)\",\"Website UI\\/UX Testing for Better User Experience\",\"Less Scroll, Better Engagement Layout\",\"Conversion-Focused Call-To-Action Strategy\",\"Copyright-Free Unique Website Content\",\"Analytics & Performance Monitoring Dashboard\",\"1 Month Free Maintenance & Technical Support\",\"Unique UI\\/UX\",\"Faster Delivery (Within 15\\u201320 Working Days)\",\"Dynamic Content Rendering\",\"Error-Free, Well-Commented Code\",\"Best for Professional & Corporate Websites\"]', 'yes', 'premium-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(16, 'ecommerce-website-package-hyderabad', '29999', '[\"Dynamic eCommerce Website with 5\\u201310 Products\",\"Wordpress Technology\",\"Free SSL Certificate for 1 Year\",\"Free Web Hosting for 1 Year\",\"Copyright-Free Unique Website Content & Stock Images\",\"Unique & User Interactive UI\\/UX\",\"Effective Call-To-Actions & Easy Navigation\",\"Mobile-Friendly \\/ Responsive Design\",\"Google Page Speed Optimized\",\"Shopping Cart & Checkout System\",\"Customer Login \\/ Signup\",\"Admin Dashboard for Basic Store Management\",\"1 Contact Form for Capturing Leads\",\"Social Media & WhatsApp Integration\",\"SEO Optimized Code for Homepage & Product Pages\",\"Secure & Error-Free Coding\",\"Browser Compatibility Testing\",\"1 Week Free Support After Deployment\",\"Delivery Within 15\\u201320 Working Days\",\"Complete Deployment\",\"Perfect for Small Businesses & Startups\"]', 'yes', 'basic-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(17, 'ecommerce-website-package-hyderabad', '44999', '[\"Everything in Basic\",\"Up to 50 Products\",\"Framework Technology\",\"Advanced Admin Dashboard (Add\\/Edit\\/Delete Products, Categories)\",\"Payment Gateway Integration (Razorpay, PayPal, etc.)\",\"Order & Customer Management System\",\"Discount Coupons & Promo Code Setup\",\"Product Filters & Search Functionality\",\"Google Analytics & Search Console Integration\",\"SEO Optimized Product & Category Pages\",\"Brand Typography & Color Customization\",\"Unlimited Stock Images for Products\",\"Lead Capture Forms for Marketing\",\"2 Weeks Free Support After Deployment\",\"Delivery Within 20\\u201330 Working Days\",\"Ideal for Growing Online Stores & Local Businesses\"]', 'yes', 'standard-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(18, 'ecommerce-website-package-hyderabad', '321999', '[\"Everything in Standard\",\"Unlimited Products & Categories\",\"React JS & NextJS\",\"Advanced UI\\/UX Design with Animations\",\"Multiple Payment & Shipping Options\",\"Delivery Order Confirmation\",\"Customer Wishlist & Reviews Integration\",\"Advanced Product Filters & Sorting\",\"Dynamic Offers\",\"Inventory & Stock Management Automation\",\"Email\\/SMS Notifications for Orders\",\"Analytics Dashboard for Sales & Revenue\",\"Conversion-Oriented Landing Pages for Products\",\"Advanced SEO (On-Page + Schema Markup)\",\"Security & Backup Setup\",\"UI\\/UX Testing\",\"1 Month Free Maintenance & Support\",\"Shopping Cart & Checkout System\",\"Customer, Delivery Boy & Owner Login \\/ Signup\",\"Minified CSS\\/JS\",\"Perfect for Professional Businesses & Growing eCommerce Stores\"]', 'yes', 'premium-plan', '', '', '18th Oct, 2025', 'chandan dubey'),
(20, 'youtube-management', '39999', '[\"2 Professional 4K Shoots with Professional Mic & Camera\",\"12\\u201315 Edited YouTube Videos\",\"16\\u201320 Engaging Reels \\/ Shorts\",\"Video Production & Editing\",\"Eye-Catching Thumbnails\",\"Content Calendar Planning\",\"YouTube SEO Optimization\",\"Channel Setup & Optimization\",\"Content Promotion & Distribution\",\"Community Management (Comments & Engagement)\",\"Performance Analytics & Reporting\",\"Monetization Strategy & Guidance\",\"Free & Paid Traffic Strategy\"]', 'yes', 'standard-plan', '', '', '19th Nov, 2025', 'Mr. Sanjay'),
(21, 'youtube-management', '6999', '[\"High-Engaging Reels \\/ Shorts Video Posting\",\"YouTube SEO Optimization\",\"Channel Setup & Professional Optimization\",\"Community Management\",\"Performance Analytics & Monthly Reporting\",\"Monetization Strategy & Guidance\",\"Custom thumbnails\",\"Hashtag strategy\",\"Content Calendar Planning\",\"Strategy Planning\"]', 'yes', 'basic-plan', '', '', '19th Nov, 2025', 'Mr. Sanjay');

-- --------------------------------------------------------

--
-- Table structure for table `package_tbls`
--

CREATE TABLE `package_tbls` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `package_placement` varchar(255) NOT NULL,
  `vissible_package_list` text NOT NULL,
  `blur_package_list` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `visibility` varchar(10) NOT NULL DEFAULT 'yes',
  `updated_by` varchar(255) NOT NULL,
  `updated_date` varchar(20) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `added_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_tbls`
--

INSERT INTO `package_tbls` (`id`, `heading`, `sub_heading`, `package_placement`, `vissible_package_list`, `blur_package_list`, `slug`, `visibility`, `updated_by`, `updated_date`, `added_by`, `added_date`) VALUES
(1, 'Social Media Marketing', 'Creative, Consistent & Conversion-Focused', 'digital-marketing', '[\"15-18 High-Quality Creative Posts.\",\"Competitor Analysis.\",\"Paid Meta Ads.\",\"Strategy & Content Calendar.\"]', '[\"Monthly Insights & ROI Reports\",\"Social Media Manager Support.\"]', 'social-media-marketing-package-hyderabad', 'yes', '', '', 'chandan dubey', '20th Oct, 2025'),
(2, 'Google Ads/PPC Ads', 'From Clicks to Customers', 'digital-marketing', '[\"Ads Account Setup & Audit.\",\"Advanced Keyword Research.\",\"Conversion Tracking.\",\"Audience Targeting Strategies\"]', '[\"Daily Campaign Monitoring\",\"Ads Specialist Support\"]', 'google-ads-package-hyderabad', 'yes', '', '', 'chandan dubey', '20th Oct, 2025'),
(3, 'Search Engine Optmization(SEO)', 'From Keywords to Conversions', 'digital-marketing', '[\"Free Website Audit.\",\"Keyword Research & Strategy.\",\"Competitor Analysis & Reporting.\",\"High-Quality Backlink Building.\"]', '[\"On-Page SEO Optimization.\",\"Monthly Performance & Ranking Reports.\"]', 'seo-package-hyderabad', 'yes', '', '', 'chandan dubey', '20th Oct, 2025'),
(4, 'Starter Static Website', 'Perfect for Small Businesses', 'website-design', '[\"Delivery Within 3 Working Days.\",\"FREE Web Hosting & SSL for 1 year.\",\"1 Week FREE Support After Deployment.\",\"Responsive Design.\"]', '[\"Basic SEO Setup.\",\"Browser Compatibility Testing.\",\"Google Page Speed Optimized.\"]', 'static-website-package-hyderabad', 'yes', '', '', 'chandan dubey', '20th Oct, 2025'),
(5, 'Dynamic Website', 'Best for Growing Businesses', 'website-design', '[\"Unlimited Dynamic Web Pages Website.\",\"FREE Web Hosting & SSL for 1 year.\",\"1 Week FREE Support After Deployment.\",\"Responsive Design.\"]', '[\"Basic SEO Setup.\",\"Browser Compatibility Testing.\",\"Google Page Speed Optimized.\"]', 'dynamic-website-package-hyderabad', 'yes', '', '', 'chandan dubey', '20th Oct, 2025'),
(6, 'E-Commerce Website', 'Ideal for Online Stores', 'website-design', '[\"Add & Manage Unlimited Store Products.\",\"Shopping Cart System.\",\"Easy Checkout System.\",\"Secure Payment Gateway Integration.\"]', '[\"Basic SEO Setup.\",\"Browser Compatibility Testing.\",\"Google Page Speed Optimized.\"]', 'ecommerce-website-package-hyderabad', 'yes', '', '', 'chandan dubey', '20th Oct, 2025'),
(7, 'YouTube Management', 'Optimize, Monetize, and Maximize Your YouTube Potential.', 'digital-marketing', '[\"2 Professional 4K Shoots with Professional Mic & Camera\",\"12\\u201315 Edited YouTube Videos\",\"16\\u201320 Engaging Reels \\/ Shorts\",\"Video Production\\u00a0&\\u00a0Editing\"]', '[\"2 Professional 4K Shoots with Professional Mic & Camera\",\"12\\u201315 Edited YouTube Videos\",\"16\\u201320 Engaging Reels \\/ Shorts\",\"Video Production\\u00a0&\\u00a0Editing\"]', 'youtube-management', 'yes', '', '', 'Mr. Sanjay', '23rd Oct, 2025');

-- --------------------------------------------------------

--
-- Table structure for table `quotations_tbls`
--

CREATE TABLE `quotations_tbls` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(80) NOT NULL,
  `business_name` varchar(400) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `business_address` varchar(400) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `created_by` varchar(80) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotations_tbls`
--

INSERT INTO `quotations_tbls` (`id`, `customer_name`, `business_name`, `mobile_number`, `business_address`, `grand_total`, `created_by`, `created_date`) VALUES
(7, 'Daniel', 'Food App', '+91 6300 460 538', 'Hyderabad ', 19999, 'Mr. Sanjay', '23rd Oct, 2025'),
(9, 'SriSailam CH', 'Fermillet Kitchen ', '9493016331', 'Hno .4-4-80/1,Koundinya Nagar, Nachaaram.', 42997, 'Mr. Sanjay', '27th Oct, 2025'),
(12, 'Nithin', 'Flavo matrix ', '8121224240', 'himayat nagar', 54997, 'Mr. Raja Vardhaman', '28th Oct, 2025'),
(14, 'Srikanth ', 'Indo pest service', '6303678002', 'Balaji Nagar ', 24999, 'Mr. Sanjay', '28th Oct, 2025'),
(15, 'Srikanth', 'Indo pest service', '63036 78002', 'Sainikpuri ', 14999, 'Mr. Sanjay', '28th Oct, 2025'),
(16, 'Dr Arjumand Afaq', 'Dr Arjumand Afaq', '7416627575', '8-5-5/78, Vyasapuri, Subhan colony phase ll, Chandrayangutta, Hyderabad, Telangana 500005', 74997, 'Mr. Sanjay', '3rd Nov, 2025'),
(18, 'Santoshi ', 'Aruna Nighties ', '9290244939', 'HYD', 44999, 'Mr. Raja Vardhaman', '4th Nov, 2025'),
(19, 'TRB Events', 'TRB Events', '9553860099', 'Madhapur ', 37997, 'Mr. Sanjay', '6th Nov, 2025'),
(20, 'Bhanu Prathap', 'Interior designer ', '96669 94443', 'Hyderabad', 74997, 'Mr. Sanjay', '8th Nov, 2025'),
(21, 'Ramana', 'Urban City', '6309701349', 'HYD', 32997, 'Mr. Raja Vardhaman', '10th Nov, 2025'),
(22, 'amuldesigners', 'amuldesigners', '9666331178', 'Hyderabad', 19999, 'Mr. Raja Vardhaman', '12th Nov, 2025'),
(23, 'Syed Hussein', 'Vitayum Foods', '8978698501', 'Hyderabad', 7999, 'Mr. Sanjay', '12th Nov, 2025'),
(24, ' Syed Hussein', 'Vitayum Foods', '8978698501', 'Hyderabad', 14999, 'Mr. Sanjay', '12th Nov, 2025'),
(25, 'Syed Hussein', 'Vitayum Foods', '8978698501', 'Hyderabad', 24999, 'Mr. Sanjay', '12th Nov, 2025'),
(26, 'Syed Hussein', ' Vitayum Foods', '8978698501', 'Hyderabad', 9999, 'Mr. Sanjay', '12th Nov, 2025'),
(27, 'Syed Hussein', 'Vitayum Foods', '8978698501', ' Hyderabad', 14999, 'Mr. Sanjay', '12th Nov, 2025'),
(28, ' Syed Hussein', 'Vitayum Foods', ' 8978698501', 'Hyderabad', 22999, 'Mr. Sanjay', '12th Nov, 2025'),
(29, ' Syed Hussein', 'Vitayum Foods', '8978698501', ' Hyderabad', 9999, 'Mr. Sanjay', '12th Nov, 2025'),
(30, ' Syed Hussein', ' Vitayum Foods', '8978698501', 'Hyderabad\r\n ', 14999, 'Mr. Sanjay', '12th Nov, 2025'),
(31, 'Syed Hussein', 'Vitayum Foods', '8978698501', 'Hyderabad', 19999, 'Mr. Sanjay', '12th Nov, 2025'),
(32, 'Mr. Dev', 'Farma Industry', '8951805337', 'Hyderabad', 24999, 'Mr. Sanjay', '12th Nov, 2025'),
(33, 'Mr Dev', 'Farma Industry', '8951805337', 'Hyderabad', 34999, 'Mr. Sanjay', '12th Nov, 2025'),
(34, 'Mr. Narsing Rao', 'Synergy School of Business', '9359925032', 'Hyderabad', 19999, 'Mr. Sanjay', '13th Nov, 2025'),
(35, 'Mr. Narsing Rao', 'Synergy School Of Business', '9359925032', 'Hyderabad', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(36, 'Mr. Narsing Rao', 'Synergy School Of Business', '9359925032', 'Hyderabad', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(37, 'Mr. Narsing Rao', 'Synergy School Of Business', '9359925032', 'Hyderabad', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(38, 'Mr. Narsing Rao', 'Synergy School Of Business', '9359925032', 'Hyderabad', 24999, 'Mr. Sanjay', '13th Nov, 2025'),
(39, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 7999, 'Mr. Sanjay', '13th Nov, 2025'),
(40, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(41, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 24999, 'Mr. Sanjay', '13th Nov, 2025'),
(42, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(43, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(44, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '79789493119', 'Hyderabad', 19999, 'Mr. Sanjay', '13th Nov, 2025'),
(46, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(47, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 22999, 'Mr. Sanjay', '13th Nov, 2025'),
(48, 'Mr. Abdul Hakeem', 'VST Poly Clinic', '7989493119', 'Hyderabad', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(50, 'all quotations', 'all quotations', 'all quotations', 'all quotations', 599984, 'Mr. Sanjay', '14th Nov, 2025'),
(51, 'All quotation', 'All quotation', 'All quotation', 'All quotation', 74997, 'Mr. Sanjay', '15th Nov, 2025'),
(55, 'Mr. Naidu', 'My Perfect Job Consultant', '7075794309', 'Hyderabad', 49997, 'Mr. Sanjay', '15th Nov, 2025'),
(57, ' Mr. Narsing Rao', 'Synergy School Of Business', '9359925032', 'Hyderabad', 34998, 'Mr. Sanjay', '18th Nov, 2025'),
(60, 'BPQ Group', 'The Lemon Sky', '7416627575', 'Hyderabad ', 26998, 'Mr. Sanjay', '19th Nov, 2025'),
(61, 'BPQ Group', 'Lake View Hotels', '7416627575', 'Hyderabad ', 26998, 'Mr. Sanjay', '19th Nov, 2025'),
(63, 'BPQ Group', 'Dr. Arjumand Afaq', '7416627575', 'Hyderabad', 74997, 'Mr. Sanjay', '19th Nov, 2025'),
(65, 'Kishore', 'Kdizee School', '9063976510', 'Hyderabad', 34998, 'Mr. Sanjay', '20th Nov, 2025'),
(66, 'Asad', 'Invisible Grills', '6301033853', 'Bora Banda', 31997, 'Mr. Sanjay', '20th Nov, 2025'),
(67, 'Asad', 'Invisible Grills', '6301033853', 'Bora Banda', 7999, 'Mr. Sanjay', '20th Nov, 2025'),
(68, 'Ram', 'Ram\'s Audio Visual Services', '9133033004', 'Hyderabad ', 7999, 'Mr. Sanjay', '20th Nov, 2025'),
(70, 'Demo for Dynamic website', 'adgy', 'fvfvf', 'vfvfv', 74997, 'Mr. Sanjay', '24th Nov, 2025'),
(71, 'mad academy ', 'mad academy ', '91 74161 98555', 'KPHB Colony', 22998, 'Mr. Sanjay', '25th Nov, 2025'),
(72, 'Charanjit Singh Sethi', 'Meals box', '8684881919', 'Hyderabad', 14999, 'Mr. Sanjay', '26th Nov, 2025'),
(74, 'Manisha', 'NGO', '+916303486189', 'Sainaikpuri', 9999, 'Mr. Sanjay', '3rd Dec, 2025'),
(75, 'Shanmukha gold', 'shanmukha gold', '9059200659', 'Ameerpet', 42998, 'Mr. Sanjay', '3rd Dec, 2025'),
(76, 'NRI Clinic ', 'NRI Clinic ', '+91 89856 51122', 'begumpet', 51997, 'Mr. Sanjay', '8th Dec, 2025'),
(77, 'Dr. Rajeshwari', 'Dr.Rajeshwari\'s Skin Care & Hair Restoration Centre', '+91 98491 11171', 'Gachibowli - Miyapur Rd.', 34999, 'Mr. Sanjay', '8th Dec, 2025'),
(78, 'Dr. Rajeshwari\'s', 'Dr.Rajeshwari\'s Skin Care & Hair Restoration Centre', '+91 98491 11171', 'Gachibowli - Miyapur Rd.', 24999, 'Mr. Sanjay', '8th Dec, 2025');

-- --------------------------------------------------------

--
-- Table structure for table `users_quotations_items_tbls`
--

CREATE TABLE `users_quotations_items_tbls` (
  `id` int(11) NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `package_slug` varchar(255) NOT NULL,
  `package_plan` varchar(255) NOT NULL,
  `package_price` int(11) NOT NULL,
  `created_by` varchar(80) NOT NULL,
  `added_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_quotations_items_tbls`
--

INSERT INTO `users_quotations_items_tbls` (`id`, `quotation_id`, `package_slug`, `package_plan`, `package_price`, `created_by`, `added_date`) VALUES
(1, 1, 'static-website-package-hyderabad', 'basic-plan', 3999, 'chandan dubey', '23rd Oct, 2025'),
(2, 2, 'static-website-package-hyderabad', 'standard-plan', 7999, 'chandan dubey', '23rd Oct, 2025'),
(3, 2, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'chandan dubey', '23rd Oct, 2025'),
(4, 3, 'static-website-package-hyderabad', 'basic-plan', 3999, 'chandan dubey', '23rd Oct, 2025'),
(5, 3, 'static-website-package-hyderabad', 'standard-plan', 7999, 'chandan dubey', '23rd Oct, 2025'),
(6, 3, 'static-website-package-hyderabad', 'premium-plan', 9999, 'chandan dubey', '23rd Oct, 2025'),
(7, 3, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'chandan dubey', '23rd Oct, 2025'),
(8, 3, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'chandan dubey', '23rd Oct, 2025'),
(9, 4, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'chandan dubey', '23rd Oct, 2025'),
(10, 4, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'chandan dubey', '23rd Oct, 2025'),
(11, 4, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'chandan dubey', '23rd Oct, 2025'),
(12, 4, 'seo-package-hyderabad', 'basic-plan', 9999, 'chandan dubey', '23rd Oct, 2025'),
(13, 4, 'seo-package-hyderabad', 'standard-plan', 14999, 'chandan dubey', '23rd Oct, 2025'),
(14, 4, 'seo-package-hyderabad', 'premium-plan', 22999, 'chandan dubey', '23rd Oct, 2025'),
(15, 4, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'chandan dubey', '23rd Oct, 2025'),
(16, 4, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'chandan dubey', '23rd Oct, 2025'),
(17, 4, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'chandan dubey', '23rd Oct, 2025'),
(18, 4, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'chandan dubey', '23rd Oct, 2025'),
(19, 4, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'chandan dubey', '23rd Oct, 2025'),
(20, 4, 'dynamic-website-package-hyderabad', 'premium-plan', 34999, 'chandan dubey', '23rd Oct, 2025'),
(21, 4, 'ecommerce-website-package-hyderabad', 'basic-plan', 29999, 'chandan dubey', '23rd Oct, 2025'),
(22, 4, 'ecommerce-website-package-hyderabad', 'standard-plan', 42999, 'chandan dubey', '23rd Oct, 2025'),
(23, 4, 'ecommerce-website-package-hyderabad', 'premium-plan', 321999, 'chandan dubey', '23rd Oct, 2025'),
(24, 4, 'static-website-package-hyderabad', 'basic-plan', 3999, 'chandan dubey', '23rd Oct, 2025'),
(25, 4, 'static-website-package-hyderabad', 'standard-plan', 7999, 'chandan dubey', '23rd Oct, 2025'),
(26, 4, 'static-website-package-hyderabad', 'premium-plan', 9999, 'chandan dubey', '23rd Oct, 2025'),
(27, 5, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '23rd Oct, 2025'),
(28, 5, 'static-website-package-hyderabad', 'standard-plan', 7999, 'Mr. Sanjay', '23rd Oct, 2025'),
(29, 5, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'Mr. Sanjay', '23rd Oct, 2025'),
(30, 6, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Raja Vardhaman', '23rd Oct, 2025'),
(31, 6, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Raja Vardhaman', '23rd Oct, 2025'),
(32, 6, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Raja Vardhaman', '23rd Oct, 2025'),
(33, 6, 'seo-package-hyderabad', 'basic-plan', 9999, 'Mr. Raja Vardhaman', '23rd Oct, 2025'),
(34, 7, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '23rd Oct, 2025'),
(35, 8, 'youtube-management', 'basic-plan', 39999, 'Mr. Sanjay', '23rd Oct, 2025'),
(36, 9, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '27th Oct, 2025'),
(37, 9, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '27th Oct, 2025'),
(38, 9, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '27th Oct, 2025'),
(39, 10, 'seo-package-hyderabad', 'premium-plan', 22999, 'Mr. Sanjay', '28th Oct, 2025'),
(40, 11, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '28th Oct, 2025'),
(41, 12, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Raja Vardhaman', '28th Oct, 2025'),
(42, 12, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Raja Vardhaman', '28th Oct, 2025'),
(43, 12, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Raja Vardhaman', '28th Oct, 2025'),
(44, 13, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '28th Oct, 2025'),
(45, 14, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'Mr. Sanjay', '28th Oct, 2025'),
(46, 15, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '28th Oct, 2025'),
(47, 16, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '3rd Nov, 2025'),
(48, 16, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '3rd Nov, 2025'),
(49, 16, 'youtube-management', 'basic-plan', 39999, 'Mr. Sanjay', '3rd Nov, 2025'),
(50, 17, 'ecommerce-website-package-hyderabad', 'standard-plan', 42999, 'Mr. Raja Vardhaman', '4th Nov, 2025'),
(51, 18, 'ecommerce-website-package-hyderabad', 'standard-plan', 44999, 'Mr. Raja Vardhaman', '4th Nov, 2025'),
(52, 19, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '6th Nov, 2025'),
(53, 19, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '6th Nov, 2025'),
(54, 19, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '6th Nov, 2025'),
(55, 20, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '8th Nov, 2025'),
(56, 20, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '8th Nov, 2025'),
(57, 20, 'youtube-management', 'basic-plan', 39999, 'Mr. Sanjay', '8th Nov, 2025'),
(58, 21, 'static-website-package-hyderabad', 'premium-plan', 9999, 'Mr. Raja Vardhaman', '10th Nov, 2025'),
(59, 21, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Raja Vardhaman', '10th Nov, 2025'),
(60, 21, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Raja Vardhaman', '10th Nov, 2025'),
(61, 22, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Raja Vardhaman', '12th Nov, 2025'),
(62, 23, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '12th Nov, 2025'),
(63, 24, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '12th Nov, 2025'),
(64, 25, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'Mr. Sanjay', '12th Nov, 2025'),
(65, 26, 'seo-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '12th Nov, 2025'),
(66, 27, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '12th Nov, 2025'),
(67, 28, 'seo-package-hyderabad', 'premium-plan', 22999, 'Mr. Sanjay', '12th Nov, 2025'),
(68, 29, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '12th Nov, 2025'),
(69, 30, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '12th Nov, 2025'),
(70, 31, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '12th Nov, 2025'),
(71, 32, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Sanjay', '12th Nov, 2025'),
(72, 33, 'dynamic-website-package-hyderabad', 'premium-plan', 34999, 'Mr. Sanjay', '12th Nov, 2025'),
(73, 34, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '13th Nov, 2025'),
(74, 35, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(75, 36, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(76, 37, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(77, 38, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'Mr. Sanjay', '13th Nov, 2025'),
(78, 39, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '13th Nov, 2025'),
(79, 40, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(80, 41, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'Mr. Sanjay', '13th Nov, 2025'),
(81, 42, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(82, 43, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(83, 44, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '13th Nov, 2025'),
(84, 45, 'seo-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(85, 46, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '13th Nov, 2025'),
(86, 47, 'seo-package-hyderabad', 'premium-plan', 22999, 'Mr. Sanjay', '13th Nov, 2025'),
(87, 48, 'seo-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '13th Nov, 2025'),
(88, 49, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '14th Nov, 2025'),
(89, 49, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Sanjay', '14th Nov, 2025'),
(90, 49, 'dynamic-website-package-hyderabad', 'premium-plan', 34999, 'Mr. Sanjay', '14th Nov, 2025'),
(91, 50, 'ecommerce-website-package-hyderabad', 'basic-plan', 29999, 'Mr. Sanjay', '14th Nov, 2025'),
(92, 50, 'ecommerce-website-package-hyderabad', 'standard-plan', 44999, 'Mr. Sanjay', '14th Nov, 2025'),
(93, 50, 'ecommerce-website-package-hyderabad', 'premium-plan', 321999, 'Mr. Sanjay', '14th Nov, 2025'),
(94, 50, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '14th Nov, 2025'),
(95, 50, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '14th Nov, 2025'),
(96, 50, 'google-ads-package-hyderabad', 'premium-plan', 24999, 'Mr. Sanjay', '14th Nov, 2025'),
(97, 50, 'seo-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '14th Nov, 2025'),
(98, 50, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '14th Nov, 2025'),
(99, 50, 'seo-package-hyderabad', 'premium-plan', 22999, 'Mr. Sanjay', '14th Nov, 2025'),
(100, 50, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '14th Nov, 2025'),
(101, 50, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '14th Nov, 2025'),
(102, 50, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '14th Nov, 2025'),
(103, 50, 'static-website-package-hyderabad', 'basic-plan', 3999, 'Mr. Sanjay', '14th Nov, 2025'),
(104, 50, 'static-website-package-hyderabad', 'standard-plan', 7999, 'Mr. Sanjay', '14th Nov, 2025'),
(105, 50, 'static-website-package-hyderabad', 'premium-plan', 9999, 'Mr. Sanjay', '14th Nov, 2025'),
(106, 50, 'youtube-management', 'basic-plan', 39999, 'Mr. Sanjay', '14th Nov, 2025'),
(107, 51, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '15th Nov, 2025'),
(108, 51, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Sanjay', '15th Nov, 2025'),
(109, 51, 'dynamic-website-package-hyderabad', 'premium-plan', 34999, 'Mr. Sanjay', '15th Nov, 2025'),
(110, 52, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '15th Nov, 2025'),
(111, 53, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '15th Nov, 2025'),
(112, 54, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '15th Nov, 2025'),
(113, 55, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '15th Nov, 2025'),
(114, 55, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '15th Nov, 2025'),
(115, 55, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '15th Nov, 2025'),
(116, 56, 'youtube-management', 'basic-plan', 39999, 'Mr. Sanjay', '18th Nov, 2025'),
(117, 57, 'google-ads-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '18th Nov, 2025'),
(118, 57, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '18th Nov, 2025'),
(119, 58, 'youtube-management', 'standard-plan', 39999, 'Mr. Sanjay', '19th Nov, 2025'),
(120, 59, 'youtube-management', 'basic-plan', 6999, 'Mr. Sanjay', '19th Nov, 2025'),
(121, 60, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '19th Nov, 2025'),
(122, 60, 'youtube-management', 'basic-plan', 6999, 'Mr. Sanjay', '19th Nov, 2025'),
(123, 61, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '19th Nov, 2025'),
(124, 61, 'youtube-management', 'basic-plan', 6999, 'Mr. Sanjay', '19th Nov, 2025'),
(125, 62, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '19th Nov, 2025'),
(126, 62, 'youtube-management', 'standard-plan', 39999, 'Mr. Sanjay', '19th Nov, 2025'),
(127, 62, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '19th Nov, 2025'),
(128, 63, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '19th Nov, 2025'),
(129, 63, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '19th Nov, 2025'),
(130, 63, 'youtube-management', 'standard-plan', 39999, 'Mr. Sanjay', '19th Nov, 2025'),
(131, 64, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '20th Nov, 2025'),
(132, 64, 'seo-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '20th Nov, 2025'),
(133, 65, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '20th Nov, 2025'),
(134, 65, 'seo-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '20th Nov, 2025'),
(135, 66, 'static-website-package-hyderabad', 'premium-plan', 9999, 'Mr. Sanjay', '20th Nov, 2025'),
(136, 66, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '20th Nov, 2025'),
(137, 66, 'youtube-management', 'basic-plan', 6999, 'Mr. Sanjay', '20th Nov, 2025'),
(138, 67, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '20th Nov, 2025'),
(139, 68, 'google-ads-package-hyderabad', 'basic-plan', 7999, 'Mr. Sanjay', '20th Nov, 2025'),
(140, 69, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '24th Nov, 2025'),
(141, 70, 'dynamic-website-package-hyderabad', 'basic-plan', 14999, 'Mr. Sanjay', '24th Nov, 2025'),
(142, 70, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Sanjay', '24th Nov, 2025'),
(143, 70, 'dynamic-website-package-hyderabad', 'premium-plan', 34999, 'Mr. Sanjay', '24th Nov, 2025'),
(144, 71, 'static-website-package-hyderabad', 'standard-plan', 7999, 'Mr. Sanjay', '25th Nov, 2025'),
(145, 71, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '25th Nov, 2025'),
(146, 72, 'social-media-marketing-package-hyderabad', 'standard-plan', 14999, 'Mr. Sanjay', '26th Nov, 2025'),
(147, 73, 'youtube-management', 'standard-plan', 39999, 'Mr. Sanjay', '28th Nov, 2025'),
(148, 74, 'social-media-marketing-package-hyderabad', 'basic-plan', 9999, 'Mr. Sanjay', '3rd Dec, 2025'),
(149, 75, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '3rd Dec, 2025'),
(150, 75, 'seo-package-hyderabad', 'premium-plan', 22999, 'Mr. Sanjay', '3rd Dec, 2025'),
(151, 76, 'social-media-marketing-package-hyderabad', 'premium-plan', 19999, 'Mr. Sanjay', '8th Dec, 2025'),
(152, 76, 'youtube-management', 'basic-plan', 6999, 'Mr. Sanjay', '8th Dec, 2025'),
(153, 76, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Sanjay', '8th Dec, 2025'),
(154, 77, 'dynamic-website-package-hyderabad', 'premium-plan', 34999, 'Mr. Sanjay', '8th Dec, 2025'),
(155, 78, 'dynamic-website-package-hyderabad', 'standard-plan', 24999, 'Mr. Sanjay', '8th Dec, 2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hiring_application_tbls`
--
ALTER TABLE `hiring_application_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring_tbls`
--
ALTER TABLE `hiring_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbls`
--
ALTER TABLE `login_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_leads`
--
ALTER TABLE `package_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_list_tbls`
--
ALTER TABLE `package_list_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_tbls`
--
ALTER TABLE `package_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations_tbls`
--
ALTER TABLE `quotations_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_quotations_items_tbls`
--
ALTER TABLE `users_quotations_items_tbls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hiring_application_tbls`
--
ALTER TABLE `hiring_application_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hiring_tbls`
--
ALTER TABLE `hiring_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_tbls`
--
ALTER TABLE `login_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_leads`
--
ALTER TABLE `package_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `package_list_tbls`
--
ALTER TABLE `package_list_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `package_tbls`
--
ALTER TABLE `package_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quotations_tbls`
--
ALTER TABLE `quotations_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users_quotations_items_tbls`
--
ALTER TABLE `users_quotations_items_tbls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
