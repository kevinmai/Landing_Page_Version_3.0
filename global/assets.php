<?php // LP PHP functions & variables

/******************/
/** Global File **/
/******************/

$company_name = "Plumbline Services";

$vs_name = "Marketing by <a target='_blank' href='http://vitalstorm.com/'>VitalStorm</a>";

$copy = "Copyright &copy; " . date("Y") . " " . $company_name . " <br>All Rights Reserved";

$company_logo = "logo";

/* $title is used anywhere to return the name of the page */
$title = substr(basename($_SERVER["PHP_SELF"]),0,-4);

/* PHONE NUMBER */
$phone_number = "801-251-6975"; 

/* 
 * Strip dashes or unwanted characters from the page file.
 * 
 * This function is used for the title on the browser tabs.
 *
 */
function title($title){
	$title = ucwords(str_replace("-"," ",$title));
	return $title;
}
		
/* This is for the meta tag keywords */
$meta_keywords = array(
	"index" 		=> "Plumbline Services, Plumbing, HVAC, Electrical",
	"about-us" 		=> "Plumbline Services, Plumbing, HVAC, Electrical",
	"testimonials" 		=> "Plumbline Testimonials, Reviews, Ratings",
	"our-services" 		=> "Plumbing, HVAC, Electrical",
	"coupons" 		=> "Coupons, Discounts, Savings",
	"plumbing"		=> "Plumbing, Plumber, Plumbing Services", 
	"water-heater"		=> "Water heater, water heater repair, water heater replace",
	"drain-clean"		=> "Drain Clean, Clog Removal, Plumbing",
	"sump-pumps"		=> "If your basement is at risk of flooding, a sump pump will act as an excellent safeguard. By having a sump pump installed, you can have peace of mind knowing your basement will be protected.",
	"cooling-repair"	=> "Cooling Repair, AC Repair, Air Conditioning Repair",
	"cooling-replace"	=> "Cooling Replace, AC Replace, Air Conditioning Replace, AC Installation",
	"cooling-tuneup"	=> "Cooling Tune-Up, AC Tune-Up, Air Conditioning Tune-Up",
	"heating-repair"	=> "Heater Repair, Furnace Repair",
	"heating-replace"	=> "Heater Replace, Furnace Replace",
	"heating-tuneup"	=> "Heater Tune-Up, Furnace Tune-Up",
	"boilers"		=> "While some repairs may be an easy fix, it’s best to leave the job to a licensed, trained professional, as an improper repair can further damage the integrity of your system. Our trusted technicians have the expertise and equipment necessary for completing quality repairs and replacements on any type of boiler or radiator.",
	"indoor-air"		=> "Plumbline Services offers a full range of professional services, equipment options, and resources to address any issues with your indoor air quality. Our trusted technicians will conduct comprehensive air quality testing before recommending a solution.",
	"electrical"		=> "",
	"breakers"		=> "",
	"panels"		=> "",
	"surge"			=> "",
	"ceiling-fans"		=> "",
	
);

/* This is for the meta tag descriptions */
$meta_descriptions = array(
	"index" 		=> "Plumbline Services takes great pride in providing top quality Plumbing, Electrical and HVAC services, from the very first phone call to the satisfied end of a project. From preventative maintenance plans to whole-home installations, we go above and beyond to provide you with top-quality service and superb customer care. ",
	"about-us" 		=> "Plumbline Services takes great pride in providing top quality Plumbing, Electrical and HVAC services, from the very first phone call to the satisfied end of a project. From preventative maintenance plans to whole-home installations, we go above and beyond to provide you with top-quality service and superb customer care. ",
	"testimonials" 		=> "At Plumbline Services, total customer satisfaction is our highest priority. We strive for excellence in every facet of our business, and we take our customers’ opinions very seriously. If you aren’t satisfied, we promise to make it right!",
	"our-services" 		=> "At Plumbline Services, providing customers with top-notch service is our highest priority. All of our technicians are highly trained professionals who are determined to restore comfort and safety back to your home at an affordable price. The job isn’t completed until you are 100% satisfied.",
	"coupons" 		=> "For more information on our current coupon offers, give us a call. Hurry, these deals expire soon!",
	"plumbing"		=> "With Plumbline Services, you can remain confident that your home will be handled with the utmost care from the start. Our trusted plumbing technicians will work to repair the problem as quickly and efficiently as possible. From drain cleaning and fixture installations to major plumbing problems, you can count on Plumbline Services to do the job right, the first time. ", 
	"water-heater"		=> "We understand how important it is to have hot water available at all times. That is why Plumbline Services provides fast and professional water heater installation and repair at fair prices.",
	"drain-clean"		=> "It’s important to address any clogs promptly so that your plumbing system doesn’t incur any further damages. When you schedule an appointment with Plumbline Services, you and your home will be treated with care from the start. We have the equipment and expertise to perform quality, non-invasive drain cleaning services",
	"sump-pumps"		=> "If your basement is at risk of flooding, a sump pump will act as an excellent safeguard. By having a sump pump installed, you can have peace of mind knowing your basement will be protected.",
	"cooling-repair"	=> "While some repairs are an easy fix, if you do not know what you are doing, it’s best to leave the job to a certified technician as an improper repair can further damage your system. Our trusted technicians will work to repair your problem as quickly and efficiently as possible in order to prevent any additional damages from occurring. ",
	"cooling-replace"	=> "Is it time to say goodbye to an air conditioner that has kept you cool and comfortable for so many years? As you try to find a replacement air conditioner that suits both your needs and budget, we hope that you give Plumbline Services a call.",
	"cooling-tuneup"	=> "At Plumbline Services, we recommend scheduling annual tune-ups for your air conditioner. Annual tune-ups dramatically extend the lifespan of your air conditioner while also making sure your manufacturer’s warranty stays in effect.",
	"heating-repair"	=> "At Plumbline Services, we want you to have reliable comfort and warmth for your home. For this reason, we provide 24-hour emergency repair service when you need it. When your heat fails, you can depend on the technicians at Plumbline Services to perform your repair service quickly, accurately, and affordably.",
	"heating-replace"	=> "Installing or replacing a new heating system is a big decision. If your heating system frequently breaks down or has stopped working properly, call the experts at Plumbline Services so that we can quickly diagnose your problem and provide you with effective and affordable options.",
	"heating-tuneup"	=> "Annual heating tune-ups are critical to the performance of your HVAC system. Our technicians are familiar with every furnace make and model and are always comprehensive and thorough with every tune-up.",
	"boilers"		=> "While some repairs may be an easy fix, it’s best to leave the job to a licensed, trained professional, as an improper repair can further damage the integrity of your system. Our trusted technicians have the expertise and equipment necessary for completing quality repairs and replacements on any type of boiler or radiator.",
	"indoor-air"		=> "Plumbline Services offers a full range of professional services, equipment options, and resources to address any issues with your indoor air quality. Our trusted technicians will conduct comprehensive air quality testing before recommending a solution.",
	"electrical"		=> "As a homeowner, it’s critical to have your electrical system operating at peak efficiency. We can find your problem and fix it quickly and efficiently. Plumbline Services is the trusted name for all your electrical needs.",
	"breakers"		=> "We’ve all experienced a tripped breaker at one time or another. A continuously tripping breaker, however, could indicate that you have a larger problem at hand. Call Plumbline Services immediately if you suspect any problems with your circuit breaker.",
	"panels"		=> "Your breaker panel is the heart of your home’s electrical system. It controls the electricity coming into your home while also sending electricity to each circuit within your home. Unfortunately, circuit breaker panels don’t last for eternity. In fact, an outdated panel can be very dangerous.",
	"surge"			=> "",
	"ceiling-fans"		=> "",
);

/* This is for coupon names */
$coupon_name = array(
	"plumbing",
	"water-heater",
	"drain-clean",
	"sump-pumps",
	"cooling-repair",
	"cooling-replace",
	"cooling-tuneup",
	"heating-repair",
	"heating-replace",
	"heating-tuneup",
	"boilers",
	"indoor-air",
	"electrical",
	"breakers",
	"panels",
	"surge",
	"ceiling-fans",
);

$specials = array(
	"plumbing",
	"water-heater",
	"drain-clean",
	"sump-pumps",
);

/* List of the pages */
$plumbing = array(
	"plumbing",
	"water-heater",
	"drain-clean",
	"sump-pumps",
);

$hvac = array(
	"cooling-repair",
	"cooling-replace",
	"cooling-tuneup",
	"heating-repair",
	"heating-replace",
	"heating-tuneup",
	"boilers",
	"indoor-air",
);

$electrical = array(
	"electrical",
	"breakers",
	"panels",
	"surge",
	"ceiling-fans",
);

/**********************/
/* coupon.class file */
/********************/

class Coupon{
	public static function name($title,$coupon_name){
		$coupon_container = "";
		
		if(in_array($title,$coupon_name)){
			$coupon_container .= "<div class='coupon_" . $title . "' style='background:url(\"http://elements.vitalstorm.com/elements/PS/" . $title . ".png\") no-repeat scroll rgba(0, 0, 0, 0); background-size: 100%;'>";
			$coupon_container .= "<p><img alt='" . $title . "' class='print-button' src='images/print-button.png' title='" . $title . "'>Call this <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "</div>";
		}else{
			$coupon_container .= "<div class='coupon_default' style='background:url(\"http://elements.vitalstorm.com/elements/PS/default.png\")no-repeat scroll rgba(0, 0, 0, 0); background-size: 100%;'>";
			$coupon_container .= "<p><img alt='print coupon' class='print-button' src='images/print-button.png' title='print coupon'>Call this <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "</div>";
		}
		
		return $coupon_container;
	}
}

/******************/
/*** phone.class **/
/******************/

class Phone{

	/* Use this function if there are multiple phone numbers */
	public static function number($title,$hvac,$plumbing,$electrical){
		if(in_array($title,$plumbing)){
			return ("303-502-9112"); // Enter the number you want if you land on this page
		}else if(in_array($title,$hvac)){
			return ("303-578-4053");
		
		
		}else if(in_array($title,$electrical)){
			return ("303-835-3615");
		}else{
			return ("303-835-1530"); // Enter the number if it is not "water-heater"
		}
	}
	
	/* Use this function if there is only a single phone number */
	public static function number_single(){
		return "830-522-4594";
	}
}

/******************/
/*** meta.class ***/
/******************/
<?php
class Meta{

	public static function meta_keyword($title,$meta_keywords){
		foreach($meta_keywords as $key => $value){
			if($title == $key){
				return $value;
			}
		}
	}

	public static function meta_description($title,$meta_descriptions){
		foreach($meta_descriptions as $key => $value){
			if($title == $key){
				return $value;
			}
		}
	}
}
