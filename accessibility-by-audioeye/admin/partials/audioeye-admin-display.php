<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.audioeye.com
 * @since      1.0.0
 *
 * @package    Audioeye
 * @subpackage Audioeye/admin/partials
 */

$_nonce = wp_create_nonce('my_post_form_nonce');
$options = get_option('audioeye_config', array());
$site_hash = isset($options['site_hash']) ? $options['site_hash'] : null;
?>

<section class="ae-step-one <?php if ($site_hash) {
  echo esc_attr('hidden');
} ?>">
  <div class="ae-Card">
    <div class="ae-CardHeader">
      <div class="ae-logo">
        <svg width="409" height="80" viewBox="0 0 409 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M391.101 66.3238C387.45 66.3238 384.242 65.5296 381.457 63.9309C378.693 62.3322 376.538 60.0631 374.97 57.1236C373.402 54.1841 372.618 50.7082 372.618 46.7063C372.618 42.7044 373.392 39.2286 374.939 36.2891C376.507 33.3495 378.652 31.0804 381.395 29.4817C384.16 27.8831 387.336 27.0889 390.936 27.0889C392.999 27.0889 395.051 27.4086 397.114 28.0584C399.198 28.6876 401.106 29.7808 402.828 31.3589C404.561 32.937 405.953 35.1132 407.005 37.8877C408.057 40.6416 408.583 44.1484 408.583 48.4185H377.713V43.1686H401.601L400.167 45.1798C400.023 42.2403 399.528 39.8784 398.661 38.094C397.795 36.3097 396.681 35.0204 395.33 34.2365C393.968 33.4217 392.452 33.0195 390.771 33.0195C388.708 33.0195 386.955 33.5764 385.511 34.6904C384.057 35.7837 382.963 37.3514 382.21 39.4142C381.468 41.4564 381.086 43.8906 381.086 46.7476C381.086 51.0073 381.932 54.3284 383.613 56.7213C385.315 59.0833 387.811 60.2694 391.08 60.2694C393.35 60.2694 395.268 59.7021 396.836 58.5675C398.317 57.49 399.449 55.9459 400.222 53.935H408.354C408.272 54.2589 408.11 54.7947 407.789 55.6487C407.14 57.3814 405.623 59.9806 403.963 61.5586C402.323 63.1367 400.404 64.3228 398.207 65.1376C396.011 65.9525 393.649 66.3547 391.122 66.3547L391.101 66.3238Z"
            fill="white" />
          <path
            d="M338.786 79.0003V72.9253H344.82C345.284 72.9253 345.635 72.8118 345.872 72.5746C346.11 72.3477 346.326 71.9351 346.543 71.3575L348.925 64.7256L348.327 67.8817L332.536 27.9351H341.417L352.463 60.6205L351.267 60.373L362.282 27.9248H371.09L353.237 73.9154C352.556 75.6482 351.524 76.9272 350.153 77.7317C348.771 78.5671 347.254 78.9797 345.594 78.9797H338.786V79.0003Z"
            fill="white" />
          <path
            d="M294.993 65.4473V15.4238H329.339V22.3033H303.306V35.6085H325.791V42.3437H303.306V58.5678H329.824V65.4473H294.982H294.993Z"
            fill="white" />
          <path
            d="M269.858 66.3253C266.186 66.3253 262.948 65.5002 260.142 63.8602C257.357 62.1893 255.181 59.8893 253.613 56.9498C252.046 53.9896 251.262 50.5653 251.262 46.6975C251.262 42.8297 252.046 39.4261 253.613 36.4866C255.181 33.5264 257.357 31.216 260.142 29.5761C262.948 27.9052 266.186 27.0801 269.858 27.0801C273.53 27.0801 276.769 27.9155 279.574 29.5761C282.379 31.216 284.566 33.5264 286.134 36.4866C287.701 39.4261 288.485 42.8297 288.485 46.6975C288.485 50.5653 287.701 53.9793 286.134 56.9498C284.566 59.8893 282.379 62.1996 279.574 63.8602C276.769 65.5002 273.53 66.3253 269.858 66.3253ZM269.858 60.2503C273.014 60.2503 275.51 59.0332 277.336 56.5991C279.161 54.1649 280.069 50.8644 280.069 46.6975C280.069 42.5306 279.161 39.2095 277.336 36.796C275.51 34.3618 273.024 33.1448 269.858 33.1448C266.692 33.1448 264.247 34.3618 262.422 36.796C260.596 39.2095 259.688 42.4997 259.688 46.6975C259.688 50.8954 260.606 54.1649 262.422 56.5991C264.247 59.0332 266.723 60.2503 269.858 60.2503Z"
            fill="white" />
          <path
            d="M240.348 23.211C238.832 23.211 237.595 22.7262 236.635 21.7773C235.676 20.8284 235.191 19.6217 235.191 18.1055C235.191 16.5893 235.676 15.3722 236.635 14.4337C237.595 13.4744 238.812 13 240.348 13C241.885 13 243.123 13.4848 244.062 14.4337C245.021 15.3619 245.506 16.6099 245.506 18.1055C245.506 19.601 245.021 20.8284 244.062 21.7773C243.123 22.7365 241.865 23.211 240.348 23.211Z"
            fill="white" />
          <path d="M236.233 27.9344V65.4572H244.164V27.9344H236.233Z" fill="white" />
          <path
            d="M207.902 66.3247C204.787 66.3247 202.053 65.5408 199.692 63.9628C197.35 62.3641 195.535 60.095 194.256 57.1555C192.977 54.2159 192.327 50.7195 192.327 46.666C192.327 42.6126 192.967 39.0955 194.256 36.1766C195.566 33.2577 197.391 31.0092 199.733 29.4414C202.095 27.8634 204.838 27.0795 207.974 27.0795C210.594 27.0795 213.059 27.7087 215.379 28.9567C217.721 30.2047 219.526 32.2881 220.815 35.207L219.969 35.3824V13.3411H227.859V65.448H220.392V57.7331L220.567 58.29C219.422 61.0233 217.7 63.0448 215.41 64.365C213.12 65.6646 210.614 66.3144 207.902 66.3144V66.3247ZM210.429 60.1362C212.275 60.1362 213.935 59.6618 215.41 58.7129C216.906 57.764 218.092 56.2994 218.958 54.3397C219.845 52.3491 220.289 49.8324 220.289 46.8001C220.289 42.2103 219.34 38.8067 217.452 36.5891C215.555 34.3613 213.255 33.2577 210.542 33.2577C207.664 33.2577 205.323 34.4438 203.528 36.8057C201.723 39.1677 200.826 42.4991 200.826 46.8104C200.826 51.1217 201.692 54.2985 203.425 56.6398C205.179 58.9811 207.52 60.1466 210.439 60.1466L210.429 60.1362Z"
            fill="white" />
          <path
            d="M165.957 66.3236C163.193 66.3236 160.862 65.7047 158.943 64.4773C157.025 63.2293 155.56 61.4656 154.56 59.1965C153.58 56.9274 153.085 54.2664 153.085 51.2031V27.9344H161.016V50.4501C161.016 53.4825 161.563 55.8547 162.667 57.5669C163.791 59.279 165.699 60.1351 168.381 60.1351C170.227 60.1351 171.877 59.6606 173.331 58.7117C174.786 57.7628 175.931 56.2879 176.766 54.2973C177.612 52.3067 178.024 49.7385 178.024 46.5823V27.9344H185.915V65.4572H178.375V56.6386L178.623 58.1651C177.571 60.5992 175.972 62.5692 173.816 64.0751C171.661 65.5809 169.041 66.3339 165.957 66.3339V66.3236Z"
            fill="white" />
          <path
            d="M98.9824 65.4469L119.435 15.4235H129.048L149.47 65.4469H140.559L124.242 22.5196L107.894 65.4572H98.9824V65.4469ZM110.699 50.2645V43.5913H137.712V50.2645H110.699Z"
            fill="white" />
          <g clip-path="url(#clip0_16070_1817)">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M15.7124 9C22.6024 14.63 31.4024 18 40.9824 18C50.5624 18 59.3624 14.63 66.2524 9C59.3624 3.37 50.5624 0 40.9824 0C31.4024 0 22.6024 3.37 15.7124 9ZM9.98242 65.2705C15.6124 58.3805 18.9824 49.5805 18.9824 40.0005C18.9824 30.4205 15.6124 21.6205 9.98242 14.7305C4.35242 21.6205 0.982422 30.4205 0.982422 40.0005C0.982422 49.5805 4.35242 58.3805 9.98242 65.2705ZM66.2524 71C59.3624 65.37 50.5624 62 40.9824 62C31.4024 62 22.6024 65.37 15.7124 71C22.6024 76.63 31.4024 80 40.9824 80C50.5624 80 59.3624 76.63 66.2524 71ZM62.9824 40.0005C62.9824 30.4205 66.3524 21.6205 71.9824 14.7305C77.6124 21.6205 80.9824 30.4205 80.9824 40.0005C80.9824 49.5805 77.6124 58.3805 71.9824 65.2705C66.3524 58.3805 62.9824 49.5805 62.9824 40.0005Z"
              fill="#3CB4B0" />
          </g>
          <defs>
            <clipPath id="clip0_16070_1817">
              <rect width="80" height="80" fill="white" transform="translate(0.982422)" />
            </clipPath>
          </defs>
        </svg>

      </div>

      <h1>Congratulations! Just 2 more steps...</h1>
      <p class="ae-subtitle">Activate AudioEye to enable automated accessibility fixes, your Usability Toolbar, and
        more!</p>

    </div>

    <div class="ae-CardBody">

      <h2>1. Sign up for AudioEye</h2>
      <div class="ae-indent-content">
        <a class="ae-register-button"
          href="https://www.audioeye.com/#get-started-free?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
          target="_blank" rel="noreferrer">
          <span>Start Your Free Trial</span>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.5 11C14.5 12.9526 14.5 14.0474 14.5 16H5.5V7H10.5M12 5H16.5M16.5 5V9.5M16.5 5L10 11.5"
              stroke="white" stroke-width="1.25" />
          </svg>
        </a>
        <p class="ae-login-text">Already have an AudioEye account? Log in to the <a
            href="https://customer-portal.audioeye.com/login?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
            target="_blank" rel="noreferrer">AudioEye Portal<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
                stroke="#3975BB" stroke-width="1.5" />
            </svg></a> to get your Site ID.</p>
      </div>

      <div class="ae-step-one-spacer"></div>

      <h2>2. Enter your AudioEye Site ID</h2>
      <div class="ae-indent-content">
        <p>Every site in your AudioEye account has its own Site ID.<br />Your Site ID is available under
          <i>Installation</i>.
        </p>
        <form class="ae-site-id-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="action" value="post_first">
          <input type="hidden" name="_nonce" value="<?php echo esc_attr($_nonce); ?>" />
          <div class="site-id-field-container">
            <label class="site-id-field">
              <span>Enter AudioEye Site ID</span>
              <input name="site_hash" value="<?php echo esc_attr($site_hash); ?>" />
            </label>
            <span class="site-id-field-error">Site ID cannot be empty</span>
          </div>

          <?php
          submit_button(esc_attr__('Activate AudioEye', $this->plugin_name), 'primary', 'submit-name', TRUE);
          ?>
        </form>
      </div>
    </div>
    <a class="ae-help-link"
      href="https://help.audioeye.com/hc/en-us?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
      target="_blank" rel="noreferrer">AudioEye Help Center<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
          stroke="#3975BB" stroke-width="1.5" />
      </svg>
    </a>
  </div>
</section>

<section class="ae-step-two hidden">
  <div class="ae-Card">
    <div class="ae-CardHeader">
      <div class="ae-logo">
        <svg width="409" height="80" viewBox="0 0 409 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M391.101 66.3238C387.45 66.3238 384.242 65.5296 381.457 63.9309C378.693 62.3322 376.538 60.0631 374.97 57.1236C373.402 54.1841 372.618 50.7082 372.618 46.7063C372.618 42.7044 373.392 39.2286 374.939 36.2891C376.507 33.3495 378.652 31.0804 381.395 29.4817C384.16 27.8831 387.336 27.0889 390.936 27.0889C392.999 27.0889 395.051 27.4086 397.114 28.0584C399.198 28.6876 401.106 29.7808 402.828 31.3589C404.561 32.937 405.953 35.1132 407.005 37.8877C408.057 40.6416 408.583 44.1484 408.583 48.4185H377.713V43.1686H401.601L400.167 45.1798C400.023 42.2403 399.528 39.8784 398.661 38.094C397.795 36.3097 396.681 35.0204 395.33 34.2365C393.968 33.4217 392.452 33.0195 390.771 33.0195C388.708 33.0195 386.955 33.5764 385.511 34.6904C384.057 35.7837 382.963 37.3514 382.21 39.4142C381.468 41.4564 381.086 43.8906 381.086 46.7476C381.086 51.0073 381.932 54.3284 383.613 56.7213C385.315 59.0833 387.811 60.2694 391.08 60.2694C393.35 60.2694 395.268 59.7021 396.836 58.5675C398.317 57.49 399.449 55.9459 400.222 53.935H408.354C408.272 54.2589 408.11 54.7947 407.789 55.6487C407.14 57.3814 405.623 59.9806 403.963 61.5586C402.323 63.1367 400.404 64.3228 398.207 65.1376C396.011 65.9525 393.649 66.3547 391.122 66.3547L391.101 66.3238Z"
            fill="white" />
          <path
            d="M338.786 79.0003V72.9253H344.82C345.284 72.9253 345.635 72.8118 345.872 72.5746C346.11 72.3477 346.326 71.9351 346.543 71.3575L348.925 64.7256L348.327 67.8817L332.536 27.9351H341.417L352.463 60.6205L351.267 60.373L362.282 27.9248H371.09L353.237 73.9154C352.556 75.6482 351.524 76.9272 350.153 77.7317C348.771 78.5671 347.254 78.9797 345.594 78.9797H338.786V79.0003Z"
            fill="white" />
          <path
            d="M294.993 65.4473V15.4238H329.339V22.3033H303.306V35.6085H325.791V42.3437H303.306V58.5678H329.824V65.4473H294.982H294.993Z"
            fill="white" />
          <path
            d="M269.858 66.3253C266.186 66.3253 262.948 65.5002 260.142 63.8602C257.357 62.1893 255.181 59.8893 253.613 56.9498C252.046 53.9896 251.262 50.5653 251.262 46.6975C251.262 42.8297 252.046 39.4261 253.613 36.4866C255.181 33.5264 257.357 31.216 260.142 29.5761C262.948 27.9052 266.186 27.0801 269.858 27.0801C273.53 27.0801 276.769 27.9155 279.574 29.5761C282.379 31.216 284.566 33.5264 286.134 36.4866C287.701 39.4261 288.485 42.8297 288.485 46.6975C288.485 50.5653 287.701 53.9793 286.134 56.9498C284.566 59.8893 282.379 62.1996 279.574 63.8602C276.769 65.5002 273.53 66.3253 269.858 66.3253ZM269.858 60.2503C273.014 60.2503 275.51 59.0332 277.336 56.5991C279.161 54.1649 280.069 50.8644 280.069 46.6975C280.069 42.5306 279.161 39.2095 277.336 36.796C275.51 34.3618 273.024 33.1448 269.858 33.1448C266.692 33.1448 264.247 34.3618 262.422 36.796C260.596 39.2095 259.688 42.4997 259.688 46.6975C259.688 50.8954 260.606 54.1649 262.422 56.5991C264.247 59.0332 266.723 60.2503 269.858 60.2503Z"
            fill="white" />
          <path
            d="M240.348 23.211C238.832 23.211 237.595 22.7262 236.635 21.7773C235.676 20.8284 235.191 19.6217 235.191 18.1055C235.191 16.5893 235.676 15.3722 236.635 14.4337C237.595 13.4744 238.812 13 240.348 13C241.885 13 243.123 13.4848 244.062 14.4337C245.021 15.3619 245.506 16.6099 245.506 18.1055C245.506 19.601 245.021 20.8284 244.062 21.7773C243.123 22.7365 241.865 23.211 240.348 23.211Z"
            fill="white" />
          <path d="M236.233 27.9344V65.4572H244.164V27.9344H236.233Z" fill="white" />
          <path
            d="M207.902 66.3247C204.787 66.3247 202.053 65.5408 199.692 63.9628C197.35 62.3641 195.535 60.095 194.256 57.1555C192.977 54.2159 192.327 50.7195 192.327 46.666C192.327 42.6126 192.967 39.0955 194.256 36.1766C195.566 33.2577 197.391 31.0092 199.733 29.4414C202.095 27.8634 204.838 27.0795 207.974 27.0795C210.594 27.0795 213.059 27.7087 215.379 28.9567C217.721 30.2047 219.526 32.2881 220.815 35.207L219.969 35.3824V13.3411H227.859V65.448H220.392V57.7331L220.567 58.29C219.422 61.0233 217.7 63.0448 215.41 64.365C213.12 65.6646 210.614 66.3144 207.902 66.3144V66.3247ZM210.429 60.1362C212.275 60.1362 213.935 59.6618 215.41 58.7129C216.906 57.764 218.092 56.2994 218.958 54.3397C219.845 52.3491 220.289 49.8324 220.289 46.8001C220.289 42.2103 219.34 38.8067 217.452 36.5891C215.555 34.3613 213.255 33.2577 210.542 33.2577C207.664 33.2577 205.323 34.4438 203.528 36.8057C201.723 39.1677 200.826 42.4991 200.826 46.8104C200.826 51.1217 201.692 54.2985 203.425 56.6398C205.179 58.9811 207.52 60.1466 210.439 60.1466L210.429 60.1362Z"
            fill="white" />
          <path
            d="M165.957 66.3236C163.193 66.3236 160.862 65.7047 158.943 64.4773C157.025 63.2293 155.56 61.4656 154.56 59.1965C153.58 56.9274 153.085 54.2664 153.085 51.2031V27.9344H161.016V50.4501C161.016 53.4825 161.563 55.8547 162.667 57.5669C163.791 59.279 165.699 60.1351 168.381 60.1351C170.227 60.1351 171.877 59.6606 173.331 58.7117C174.786 57.7628 175.931 56.2879 176.766 54.2973C177.612 52.3067 178.024 49.7385 178.024 46.5823V27.9344H185.915V65.4572H178.375V56.6386L178.623 58.1651C177.571 60.5992 175.972 62.5692 173.816 64.0751C171.661 65.5809 169.041 66.3339 165.957 66.3339V66.3236Z"
            fill="white" />
          <path
            d="M98.9824 65.4469L119.435 15.4235H129.048L149.47 65.4469H140.559L124.242 22.5196L107.894 65.4572H98.9824V65.4469ZM110.699 50.2645V43.5913H137.712V50.2645H110.699Z"
            fill="white" />
          <g clip-path="url(#clip0_16070_1817)">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M15.7124 9C22.6024 14.63 31.4024 18 40.9824 18C50.5624 18 59.3624 14.63 66.2524 9C59.3624 3.37 50.5624 0 40.9824 0C31.4024 0 22.6024 3.37 15.7124 9ZM9.98242 65.2705C15.6124 58.3805 18.9824 49.5805 18.9824 40.0005C18.9824 30.4205 15.6124 21.6205 9.98242 14.7305C4.35242 21.6205 0.982422 30.4205 0.982422 40.0005C0.982422 49.5805 4.35242 58.3805 9.98242 65.2705ZM66.2524 71C59.3624 65.37 50.5624 62 40.9824 62C31.4024 62 22.6024 65.37 15.7124 71C22.6024 76.63 31.4024 80 40.9824 80C50.5624 80 59.3624 76.63 66.2524 71ZM62.9824 40.0005C62.9824 30.4205 66.3524 21.6205 71.9824 14.7305C77.6124 21.6205 80.9824 30.4205 80.9824 40.0005C80.9824 49.5805 77.6124 58.3805 71.9824 65.2705C66.3524 58.3805 62.9824 49.5805 62.9824 40.0005Z"
              fill="#3CB4B0" />
          </g>
          <defs>
            <clipPath id="clip0_16070_1817">
              <rect width="80" height="80" fill="white" transform="translate(0.982422)" />
            </clipPath>
          </defs>
        </svg>

      </div>

      <h1>Success! AudioEye has been activated :)</h1>
      <p class="ae-subtitle">It can take up to to 48 hours for data to appear in your dashboard.</p>
    </div>

    <div class="ae-CardBody">

      <h2>AudioEye is running on your site.</h2>
      <div class="ae-image-line">
        <div>
          <svg width="164" height="105" viewBox="0 0 164 105" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-0.75" y="0.75" width="161.389" height="103.214" rx="3.90397"
              transform="matrix(-1 0 0 1 162.287 0)" fill="white" stroke="black" stroke-width="1.5" />
            <path d="M1 16.8706L163.307 16.8706" stroke="black" stroke-width="0.727183" />
            <ellipse cx="9.7264" cy="8.18984" rx="2.32698" ry="2.33998" fill="black" />
            <ellipse cx="18.453" cy="8.18984" rx="2.32698" ry="2.33998" fill="black" />
            <ellipse cx="27.1785" cy="8.18984" rx="2.32698" ry="2.33998" fill="black" />
            <rect x="101" y="84.8826" width="23" height="2" rx="1" fill="black" />
            <path
              d="M126.368 85.4652C126.667 85.6629 126.667 86.1023 126.368 86.2999L122.525 88.8351C122.193 89.0544 121.75 88.816 121.75 88.4177V83.3474C121.75 82.9491 122.193 82.7107 122.525 82.9301L126.368 85.4652Z"
              fill="black" />
            <g clip-path="url(#clip1)">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M141.606 75C147.303 75 151.921 79.6179 151.921 85.3144C151.921 91.0108 147.303 95.6287 141.606 95.6287C135.91 95.6287 131.292 91.0108 131.292 85.3144C131.292 79.6179 135.91 75 141.606 75Z"
                fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M141.607 75.8169C136.361 75.8148 132.108 80.0655 132.105 85.311C132.103 90.5565 136.354 94.81 141.6 94.8121C146.845 94.8142 151.099 90.5635 151.101 85.318V85.3145C151.103 80.0711 146.853 75.8186 141.61 75.8169H141.607ZM141.607 78.1939C142.524 78.1939 143.268 78.9377 143.268 79.8554C143.268 80.773 142.524 81.5168 141.607 81.5168C140.689 81.5168 139.945 80.773 139.945 79.8554C139.945 78.9377 140.689 78.1939 141.607 78.1939ZM147.104 82.8711L143.662 83.4541C143.439 83.498 143.275 83.6904 143.268 83.9183V84.5605C143.254 85.253 143.317 85.9449 143.457 86.6234L144.58 91.4647C144.701 91.8595 144.478 92.2766 144.083 92.3967C143.978 92.4288 143.866 92.4371 143.757 92.4211C143.43 92.4078 143.153 92.1754 143.083 91.8556L141.778 87.318C141.75 87.2217 141.649 87.1658 141.553 87.1934C141.493 87.2105 141.446 87.2576 141.429 87.318L140.123 91.8556C140.053 92.1754 139.776 92.4078 139.449 92.4211C139.041 92.4815 138.662 92.1994 138.601 91.7914C138.585 91.6818 138.594 91.5705 138.626 91.4647L139.757 86.6339C139.896 85.9553 139.959 85.2635 139.945 84.571V83.9183C139.944 83.6851 139.779 83.4851 139.551 83.4401L136.109 82.8711C135.8 82.817 135.594 82.5235 135.648 82.2149C135.702 81.9064 135.996 81.7001 136.305 81.7542C136.305 81.7542 140.168 82.194 141.607 82.1975C143.045 82.201 146.909 81.7507 146.909 81.7507C147.218 81.6966 147.512 81.9039 147.567 82.2132C147.621 82.5224 147.413 82.817 147.104 82.8711Z"
                fill="#366EB0" />
            </g>
            <defs>
              <clipPath id="clip1">
                <rect width="20.9429" height="20.9429" fill="white" transform="translate(131.292 75)" />
              </clipPath>
            </defs>
          </svg>

        </div>
        <p>Look for the AudioEye Toolbar button in the bottom corner of your website.</p>
      </div>

      <div class="ae-image-line ae-image-line-dashboard">
        <div>
          <svg width="163" height="105" viewBox="0 0 163 105" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-0.75" y="0.75" width="161.389" height="103.214" rx="3.90397"
              transform="matrix(-1 0 0 1 161.389 0)" fill="white" stroke="black" stroke-width="1.5" />
            <rect x="30.75" y="30.75" width="16.5" height="51.5" stroke="black" stroke-width="1.5" />
            <rect x="58.75" y="48.75" width="16.5" height="33.5" stroke="black" stroke-width="1.5" />
            <rect x="86.75" y="30.75" width="16.5" height="51.5" stroke="black" stroke-width="1.5" />
            <rect x="114.75" y="48.75" width="16.5" height="33.5" stroke="black" stroke-width="1.5" />
          </svg>
        </div>
        <p>View your Accessibility Score and other site metrics in your accessibility <a
            href="https://customer-portal.audioeye.com/login?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
            target="_blank" rel="noreferrer">Dashboard<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
                stroke="#3975BB" stroke-width="1.5" />
            </svg>
          </a>.</p>
      </div>


      <h2>If you need to re-enter your Site ID...</h2>
      <p class="ae-need-to-reenter-site-id">Your Site ID can be found in the <a
          href="https://customer-portal.audioeye.com/login?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
          target="_blank" rel="noreferrer">AudioEye Portal<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
              stroke="#3975BB" stroke-width="1.5" />
          </svg>
        </a>. Look under <i>Installation</i>.</p>

      <div class="ae-site-id-form-edit-button-container">
        <button class="ae-site-id-form-edit-button">
          Re-enter Site ID
        </button>
      </div>

      <div class="ae-site-id-form-container hidden">
        <form class="ae-site-id-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="action" value="post_first">
          <input type="hidden" name="_nonce" value="<?php echo esc_attr($_nonce); ?>" />
          <div class="site-id-field-container">
            <label class="site-id-field">
              <span>Enter AudioEye Site ID</span>
              <input name="site_hash" value="<?php echo esc_attr($site_hash); ?>" />
            </label>
            <span class="site-id-field-error">Site ID cannot be empty</span>
          </div>

          <?php
          submit_button(esc_attr__('Update Site ID', $this->plugin_name), 'primary', 'submit-name', TRUE);
          ?>
        </form>
        <button class="ae-site-id-cancel-button">Cancel</button>
      </div>
    </div>
    <a class="ae-help-link"
      href="https://help.audioeye.com/hc/en-us?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
      target="_blank" rel="noreferrer">AudioEye Help Center<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
          stroke="#3975BB" stroke-width="1.5" />
      </svg>
    </a>
  </div>
</section>

<section class="ae-step-three <?php if (!$site_hash) {
  echo esc_attr('hidden');
} ?>">
  <div class="ae-Card">
    <div class="ae-CardHeader">
      <div class="ae-logo">
        <svg width="409" height="80" viewBox="0 0 409 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M391.101 66.3238C387.45 66.3238 384.242 65.5296 381.457 63.9309C378.693 62.3322 376.538 60.0631 374.97 57.1236C373.402 54.1841 372.618 50.7082 372.618 46.7063C372.618 42.7044 373.392 39.2286 374.939 36.2891C376.507 33.3495 378.652 31.0804 381.395 29.4817C384.16 27.8831 387.336 27.0889 390.936 27.0889C392.999 27.0889 395.051 27.4086 397.114 28.0584C399.198 28.6876 401.106 29.7808 402.828 31.3589C404.561 32.937 405.953 35.1132 407.005 37.8877C408.057 40.6416 408.583 44.1484 408.583 48.4185H377.713V43.1686H401.601L400.167 45.1798C400.023 42.2403 399.528 39.8784 398.661 38.094C397.795 36.3097 396.681 35.0204 395.33 34.2365C393.968 33.4217 392.452 33.0195 390.771 33.0195C388.708 33.0195 386.955 33.5764 385.511 34.6904C384.057 35.7837 382.963 37.3514 382.21 39.4142C381.468 41.4564 381.086 43.8906 381.086 46.7476C381.086 51.0073 381.932 54.3284 383.613 56.7213C385.315 59.0833 387.811 60.2694 391.08 60.2694C393.35 60.2694 395.268 59.7021 396.836 58.5675C398.317 57.49 399.449 55.9459 400.222 53.935H408.354C408.272 54.2589 408.11 54.7947 407.789 55.6487C407.14 57.3814 405.623 59.9806 403.963 61.5586C402.323 63.1367 400.404 64.3228 398.207 65.1376C396.011 65.9525 393.649 66.3547 391.122 66.3547L391.101 66.3238Z"
            fill="white" />
          <path
            d="M338.786 79.0003V72.9253H344.82C345.284 72.9253 345.635 72.8118 345.872 72.5746C346.11 72.3477 346.326 71.9351 346.543 71.3575L348.925 64.7256L348.327 67.8817L332.536 27.9351H341.417L352.463 60.6205L351.267 60.373L362.282 27.9248H371.09L353.237 73.9154C352.556 75.6482 351.524 76.9272 350.153 77.7317C348.771 78.5671 347.254 78.9797 345.594 78.9797H338.786V79.0003Z"
            fill="white" />
          <path
            d="M294.993 65.4473V15.4238H329.339V22.3033H303.306V35.6085H325.791V42.3437H303.306V58.5678H329.824V65.4473H294.982H294.993Z"
            fill="white" />
          <path
            d="M269.858 66.3253C266.186 66.3253 262.948 65.5002 260.142 63.8602C257.357 62.1893 255.181 59.8893 253.613 56.9498C252.046 53.9896 251.262 50.5653 251.262 46.6975C251.262 42.8297 252.046 39.4261 253.613 36.4866C255.181 33.5264 257.357 31.216 260.142 29.5761C262.948 27.9052 266.186 27.0801 269.858 27.0801C273.53 27.0801 276.769 27.9155 279.574 29.5761C282.379 31.216 284.566 33.5264 286.134 36.4866C287.701 39.4261 288.485 42.8297 288.485 46.6975C288.485 50.5653 287.701 53.9793 286.134 56.9498C284.566 59.8893 282.379 62.1996 279.574 63.8602C276.769 65.5002 273.53 66.3253 269.858 66.3253ZM269.858 60.2503C273.014 60.2503 275.51 59.0332 277.336 56.5991C279.161 54.1649 280.069 50.8644 280.069 46.6975C280.069 42.5306 279.161 39.2095 277.336 36.796C275.51 34.3618 273.024 33.1448 269.858 33.1448C266.692 33.1448 264.247 34.3618 262.422 36.796C260.596 39.2095 259.688 42.4997 259.688 46.6975C259.688 50.8954 260.606 54.1649 262.422 56.5991C264.247 59.0332 266.723 60.2503 269.858 60.2503Z"
            fill="white" />
          <path
            d="M240.348 23.211C238.832 23.211 237.595 22.7262 236.635 21.7773C235.676 20.8284 235.191 19.6217 235.191 18.1055C235.191 16.5893 235.676 15.3722 236.635 14.4337C237.595 13.4744 238.812 13 240.348 13C241.885 13 243.123 13.4848 244.062 14.4337C245.021 15.3619 245.506 16.6099 245.506 18.1055C245.506 19.601 245.021 20.8284 244.062 21.7773C243.123 22.7365 241.865 23.211 240.348 23.211Z"
            fill="white" />
          <path d="M236.233 27.9344V65.4572H244.164V27.9344H236.233Z" fill="white" />
          <path
            d="M207.902 66.3247C204.787 66.3247 202.053 65.5408 199.692 63.9628C197.35 62.3641 195.535 60.095 194.256 57.1555C192.977 54.2159 192.327 50.7195 192.327 46.666C192.327 42.6126 192.967 39.0955 194.256 36.1766C195.566 33.2577 197.391 31.0092 199.733 29.4414C202.095 27.8634 204.838 27.0795 207.974 27.0795C210.594 27.0795 213.059 27.7087 215.379 28.9567C217.721 30.2047 219.526 32.2881 220.815 35.207L219.969 35.3824V13.3411H227.859V65.448H220.392V57.7331L220.567 58.29C219.422 61.0233 217.7 63.0448 215.41 64.365C213.12 65.6646 210.614 66.3144 207.902 66.3144V66.3247ZM210.429 60.1362C212.275 60.1362 213.935 59.6618 215.41 58.7129C216.906 57.764 218.092 56.2994 218.958 54.3397C219.845 52.3491 220.289 49.8324 220.289 46.8001C220.289 42.2103 219.34 38.8067 217.452 36.5891C215.555 34.3613 213.255 33.2577 210.542 33.2577C207.664 33.2577 205.323 34.4438 203.528 36.8057C201.723 39.1677 200.826 42.4991 200.826 46.8104C200.826 51.1217 201.692 54.2985 203.425 56.6398C205.179 58.9811 207.52 60.1466 210.439 60.1466L210.429 60.1362Z"
            fill="white" />
          <path
            d="M165.957 66.3236C163.193 66.3236 160.862 65.7047 158.943 64.4773C157.025 63.2293 155.56 61.4656 154.56 59.1965C153.58 56.9274 153.085 54.2664 153.085 51.2031V27.9344H161.016V50.4501C161.016 53.4825 161.563 55.8547 162.667 57.5669C163.791 59.279 165.699 60.1351 168.381 60.1351C170.227 60.1351 171.877 59.6606 173.331 58.7117C174.786 57.7628 175.931 56.2879 176.766 54.2973C177.612 52.3067 178.024 49.7385 178.024 46.5823V27.9344H185.915V65.4572H178.375V56.6386L178.623 58.1651C177.571 60.5992 175.972 62.5692 173.816 64.0751C171.661 65.5809 169.041 66.3339 165.957 66.3339V66.3236Z"
            fill="white" />
          <path
            d="M98.9824 65.4469L119.435 15.4235H129.048L149.47 65.4469H140.559L124.242 22.5196L107.894 65.4572H98.9824V65.4469ZM110.699 50.2645V43.5913H137.712V50.2645H110.699Z"
            fill="white" />
          <g clip-path="url(#clip0_16070_1817)">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M15.7124 9C22.6024 14.63 31.4024 18 40.9824 18C50.5624 18 59.3624 14.63 66.2524 9C59.3624 3.37 50.5624 0 40.9824 0C31.4024 0 22.6024 3.37 15.7124 9ZM9.98242 65.2705C15.6124 58.3805 18.9824 49.5805 18.9824 40.0005C18.9824 30.4205 15.6124 21.6205 9.98242 14.7305C4.35242 21.6205 0.982422 30.4205 0.982422 40.0005C0.982422 49.5805 4.35242 58.3805 9.98242 65.2705ZM66.2524 71C59.3624 65.37 50.5624 62 40.9824 62C31.4024 62 22.6024 65.37 15.7124 71C22.6024 76.63 31.4024 80 40.9824 80C50.5624 80 59.3624 76.63 66.2524 71ZM62.9824 40.0005C62.9824 30.4205 66.3524 21.6205 71.9824 14.7305C77.6124 21.6205 80.9824 30.4205 80.9824 40.0005C80.9824 49.5805 77.6124 58.3805 71.9824 65.2705C66.3524 58.3805 62.9824 49.5805 62.9824 40.0005Z"
              fill="#3CB4B0" />
          </g>
          <defs>
            <clipPath id="clip0_16070_1817">
              <rect width="80" height="80" fill="white" transform="translate(0.982422)" />
            </clipPath>
          </defs>
        </svg>

      </div>

      <h1>AudioEye is active</h1>
      <p class="ae-subtitle">AudioEye enables automated accessibility fixes, your Usability Toolbar, and more!</p>

    </div>

    <div class="ae-CardBody">

      <h2>View your site's accessibility</h2>
      <p>Visit your <a
          href="https://customer-portal.audioeye.com/login?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
          target="_blank" rel="noreferrer">AudioEye Dashboard<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
              stroke="#3975BB" stroke-width="1.5" />
          </svg>
        </a> to manage your site’s accessibility:</p>
      <ul>
        <li>
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M19.5366 9.08261H23.8208V26.2197H8.39746V9.08261H12.6817M12.6817 18.508L15.2523 21.0786L20.3934 15.9374M12.6817 11.6532H19.5366V7.3689H12.6817V11.6532Z"
              stroke="#36A68A" stroke-width="1.46889" />
          </svg>

          <span>View reports</span>
        </li>
        <li>
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M7.36914 8.22583H8.226H21.9357H22.7925V9.08269V11.7243C25.224 12.1323 27.0768 14.247 27.0768 16.7944C27.0768 18.317 26.4149 19.6851 25.3631 20.6264V27.0766V28.6777L24.0309 27.7896L21.9357 26.3928L19.8404 27.7896L18.5083 28.6777V27.0766V25.3629H8.226H7.36914V24.5061V9.08269V8.22583ZM18.5083 23.6492V20.6264C17.4565 19.6851 16.7945 18.317 16.7945 16.7944C16.7945 14.247 18.6473 12.1323 21.0788 11.7243V9.93954H9.08285V23.6492H18.5083ZM20.222 21.643V25.4756L21.4604 24.6499L21.9357 24.3331L22.411 24.6499L23.6494 25.4756V21.643C23.1133 21.8324 22.5366 21.9355 21.9357 21.9355C21.3348 21.9355 20.758 21.8324 20.222 21.643ZM21.9357 13.367C20.0428 13.367 18.5083 14.9015 18.5083 16.7944C18.5083 18.6873 20.0428 20.2218 21.9357 20.2218C23.8286 20.2218 25.3631 18.6873 25.3631 16.7944C25.3631 14.9015 23.8286 13.367 21.9357 13.367Z"
              fill="#36A68A" />
          </svg>

          <span>Get legal support services</span>
        </li>
        <li>
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M19.193 19.7076C22.628 19.6523 25.191 17.1091 25.191 13.7097C25.191 11.1289 24.3367 11.9832 23.4773 12.8528C22.628 13.6919 20.9067 15.4234 20.9067 15.4234L17.4793 11.9959C17.4793 11.9959 19.2108 10.2746 20.0498 9.42538C20.9194 8.56598 20.9194 7.71167 19.193 7.71167C15.7935 7.71167 13.2405 10.2746 13.195 13.7097C13.2306 14.5462 13.195 16.2802 13.195 16.2802C11.5797 17.9057 9.47559 20.0098 8.05387 21.4213C5.54178 23.9436 8.95903 27.3609 11.4813 24.8488C12.8955 23.4243 15.0053 21.3146 16.6224 19.7076C16.6224 19.7076 18.3565 19.672 19.193 19.7076Z"
              stroke="#36A68A" stroke-width="1.46889" />
          </svg>

          <span>Configure site options</span>
        </li>
      </ul>

      <h2>If you need to re-enter your Site ID...</h2>
      <p class="ae-need-to-reenter-site-id">Your Site ID can be found in the <a
          href="https://customer-portal.audioeye.com/login?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
          target="_blank" rel="noreferrer">AudioEye Portal<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
              stroke="#3975BB" stroke-width="1.5" />
          </svg>
        </a>. Look under <i>Installation</i>.</p>

      <div class="ae-site-id-form-edit-button-container">
        <button class="ae-site-id-form-edit-button">
          Re-enter Site ID
        </button>
      </div>

      <div class="ae-site-id-form-container hidden">
        <form class="ae-site-id-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="action" value="post_first">
          <input type="hidden" name="_nonce" value="<?php echo esc_attr($_nonce); ?>" />
          <div class="site-id-field-container">
            <label class="site-id-field">
              <span>Enter AudioEye Site ID</span>
              <input name="site_hash" value="<?php echo esc_attr($site_hash); ?>" />
            </label>
            <span class="site-id-field-error">Site ID cannot be empty</span>
          </div>

          <?php
          submit_button(esc_attr__('Activate AudioEye', $this->plugin_name), 'primary', 'submit-name', TRUE);
          ?>

          <button class="ae-site-id-cancel-button">Cancel</button>
        </form>
      </div>

    </div>
    <a class="ae-help-link"
      href="https://help.audioeye.com/hc/en-us?utm_source=wordpressPlugInIntegration&utm_medium=audioeyeIntegrationReferral"
      target="_blank" rel="noreferrer">AudioEye Help Center<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M16.3 12.2C16.3 14.5431 16.3 15.8569 16.3 18.2H5.5V7.4H11.5M13.3 5H18.7M18.7 5V10.4M18.7 5L10.9 12.8"
          stroke="#3975BB" stroke-width="1.5" />
      </svg>
    </a>
  </div>
</section>