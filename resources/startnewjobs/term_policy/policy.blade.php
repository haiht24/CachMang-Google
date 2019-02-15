@extends('app')
@section('content')
    <div class="row page-boxer">
        <h3 class="lsi-header text-center"><span>Terms &amp; Conditions</span></h3>
        <div class="body-page-boxer container">
            <div class="col-xs-12 alert-info static-page navbar">
                <h2><strong>Our Commitment to Your Privacy</strong></h2>

                <p>Your privacy is important to us, and we are committed to respecting the privacy rights of users of the {{ env('SITE_NAME') }} services. We have designed this policy to help you understand how we collect and use the information you decide to share, so that you make informed decisions when using the {{ env('SITE_NAME') }} services.</p>

                <p>If you have any questions concerning this privacy policy, please email us at&nbsp;<a href="{{ url('/contact') }}">Contact Us</a>.</p>

                <h2><strong>Information We Collect</strong></h2>

                <p>As with most websites, we collect the following two types of information: (1) Personally identifiable information that is voluntarily provided by users (i.e., information that a user provides that allows us to identify and contact that user, such as their name, address or email), and (2) Non-personally identifiable information (e.g., information that is automatically collected such as the type of web browser, IP address, etc., that does not by itself identify a specific individual).</p>

                <p>We only collect personally identifiable information that you voluntarily provide to us. If you do not want this information to be collected by us, please do not submit it.</p>

                <p>Additionally, should a user contact {{ env('SITE_NAME') }} on his/her own initiative or respond to a communication from {{ env('SITE_NAME') }}, we may collect the information submitted.</p>

                <h2><strong>Cookies, Log Files and Web Beacons</strong></h2>

                <p>Like most websites, {{ env('SITE_NAME') }} uses cookies and web log files to track site usage. A cookie is a tiny data file which resides on your computer which allows {{ env('SITE_NAME') }} to recognize you as a user when you return to our site using the same computer and web browser. The cookie and log file data is used to customize your experience on the website.</p>

                <p>The cookies we use do not store any personally identifiable information about you. Most browsers automatically accept cookies, but you can modify your browser setting to decline cookies. Please be aware, though, that if you choose to decline cookies, you may not be able to use some of the features offered on our websites.</p>

                <p>Like most websites as part of the communication standards on the Internet, we use log files on our servers. These log files store various non-personally identifiable data regarding your visit with us, such as the internet protocol (IP) addresses, information regarding your browser, internet service provider (ISP), date/time stamp, referring/exit pages, platform type, and number and identification of clicks. This information is used to analyze overall trends to help us improve the {{ env('SITE_NAME') }} services. Additionally, this information may also be used to help diagnose problems with our server, to administer the {{ env('SITE_NAME') }} services, or to display the content according to your preferences. This and other anonymous information collected may also be shared with business partners and advertisers on an aggregate and anonymous basis. The linkage between your IP address and your personally identifiable information is never shared with third-parties without your permission or except when required by law.</p>

                <h2><strong>Coupon Codes and Links to Merchants</strong></h2>

                <p>When clicking on coupon codes or other links to merchants on the {{ env('SITE_NAME') }} site, you will be sent, via a new Web browser window, directly to the merchant’s site to complete your transaction.</p>

                <h2><strong>Children</strong></h2>

                <p>No one under age 18 is eligible to use our services, and we do not direct any of our content specifically at children who are under 18 years of age. {{ env('SITE_NAME') }} does not knowingly collect or solicit personal information from anyone under the age of 18. If you are under 18, please do not send any information about yourself to us, including your name, address, telephone number, or email address. No one under age 18 is allowed to provide any personal information to or on {{ env('SITE_NAME') }}. In the event that we learn that we have collected personal information from a child under age 18, we will delete that information as quickly as possible. If you believe that we might have any information from or about a child under 18, please contact us&nbsp;Contact Us.</p>

                <h2><strong>Information Use</strong></h2>

                <p>{{ env('SITE_NAME') }} uses information obtained from its users and other visitors as described in this Policy, with the primary goal being to enhance user’s experiences on the {{ env('SITE_NAME') }} website. We may use this information to deliver the services requested by users, to provide users with technical support, to enforce our Terms of Use, to communicate with users, to develop and display content and advertising tailored to your interests, and to manage our business operations. We may use information to perform other functions as otherwise described to you at the time of collection. {{ env('SITE_NAME') }} may use information collected (without identifying you as an individual) to third-parties for purposes of aggregating data. We do not link aggregate user data with personally identifiable information.</p>

                <p>Information that does not personally identify you as an individual that is collected by {{ env('SITE_NAME') }} from the site (such as, by way of example, patterns of utilization) is exclusively owned by {{ env('SITE_NAME') }}. This information can be utilized by {{ env('SITE_NAME') }} in such manner as {{ env('SITE_NAME') }}, in its sole discretion, deems appropriate.</p>

                <h2><strong>Communications with {{ env('SITE_NAME') }}</strong></h2>

                <p>{{ env('SITE_NAME') }} will communicate with you through email and notices posted on the {{ env('SITE_NAME') }} website. These include a series of up to 2 welcome emails that help inform new users about various features of the service. Please be aware that you will receive certain emails from {{ env('SITE_NAME') }} if you subscribe to our newsletter. If you do not wish to receive them, you have the option to unsubscribe. We will also communicate with you in response to your inquiries, to provide the services you request. We will communicate with you by email.</p>

                <p>{{ env('SITE_NAME') }} may also send you promotional information unless you have opted out of receiving such information. Out of respect for your privacy, we present the option not to receive these types of communications. If you wish to opt-out of receiving promotional emails, please send a request to&nbsp;Contact Us.</p>

                <h2><strong>Information Sharing</strong></h2>

                <p>{{ env('SITE_NAME') }} takes the privacy of our users very seriously. We will never sell, rent, or otherwise provide your personally identifiable information to any third-parties for marketing purposes without your express permission. {{ env('SITE_NAME') }} will only share collected information for the limited purposes set forth in this Privacy Policy.</p>

                <h2><strong>Links/Information Collected by Third-Party Sites</strong></h2>

                <p>{{ env('SITE_NAME') }} contains links to other third-party websites. Please be aware that third-party websites also may collect information from you. We are of course not responsible for the privacy practices of other websites. We encourage our users to be aware when they leave our site to read the privacy statements of each and every website that collects personally identifiable information. This Privacy Policy applies solely to information collected by {{ env('SITE_NAME') }}.</p>

                <h2><strong>Security</strong></h2>

                <p>The security of your personal information is important to us. {{ env('SITE_NAME') }} takes appropriate precautions to protect our users’ information. However, no method of transmission over the Internet, or method of electronic storage, is 100% secure. Accordingly, we cannot ensure or warrant the security of any information you transmit to {{ env('SITE_NAME') }} and you do so at your own risk. Once we receive your transmission of information, {{ env('SITE_NAME') }} makes commercially reasonable efforts to ensure the security of our systems. However, please note that this is not a guarantee that such information may not be accessed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards.</p>

                <p>If {{ env('SITE_NAME') }} learns of a security systems breach, then we may attempt to notify you electronically so that you can take appropriate protective steps. {{ env('SITE_NAME') }} may post a notice on the {{ env('SITE_NAME') }} website if a security breach occurs.</p>

                <h2><strong>Terms of Use, Notices and Revisions</strong></h2>

                <p>If you choose to visit {{ env('SITE_NAME') }}, your visit and any dispute over privacy is subject to this Privacy Policy and our Terms of Use. We reserve the right to change our Privacy Policy and our Terms of Use at any time. Non-material changes and clarifications to our Privacy Policy will take effect immediately, and material changes to our Privacy Policy will take effect within 30 days of their posting on this site. If we make changes, we will post them and will indicate at the top of this page the policy’s effective date. We therefore encourage you to refer to this policy on an ongoing basis so that you understand our current privacy policy. Unless stated otherwise, our current privacy policy applies to all information that we have about you and your account.</p>

                <h2><strong>Questions or Comments</strong></h2>

                <p>If you have questions or comments about this privacy policy, please email us or access&nbsp;<strong>Help Center</strong>.</p>
            </div>
        </div>
    </div>
@endsection