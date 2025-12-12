<?php
/**
 * Template Name: Contact Us
 */
get_header();
$lang = pll_current_language('slug'); // vi / en

$subtitle = 'Simply fill in this form and we will get in touch with you to discuss in further details. All information will be kept confidential.';

if ($lang === 'vi') {
    $subtitle = 'Chỉ cần điền vào biểu mẫu này, chúng tôi sẽ liên hệ với bạn để trao đổi chi tiết hơn. Mọi thông tin sẽ được bảo mật tuyệt đối.';
}

get_template_part('template-parts/page', 'title', [
  'subtitle' => $subtitle,
]); ?>


<div class="contact-form-container">
  <?php echo do_shortcode('[contact-form-7 id="c010ffa" title="Contact"]'); ?>
</div>

<?php get_footer(); ?>

<style>
  .contact-form-container {
    padding: 50px 0px 111.5px 0px;
  }

  /* Container chính */
  .cf7-modern-wrapper {
    max-width: 1320px;
    margin: 0 auto;

    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  }

  /* Row layout */
  .cf7-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
  }

  /* Column layout */
  .cf7-col-half {
    flex: 1;
    min-width: 280px;
  }

  .cf7-col-full {
    flex: 1 1 100%;
  }

  /* Input fields styling */
  .cf7-input,
  .cf7-select,
  .cf7-textarea {
    width: 100%;
    padding: 14px 16px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    font-size: 14px;
    color: #374151;
    background-color: #f9fafb;
    transition: all 0.3s ease;
    box-sizing: border-box;
    font-family: inherit;
  }

  .cf7-input:focus,
  .cf7-select:focus,
  .cf7-textarea:focus {
    outline: none;
    border-color: #3b82f6;
    background-color: #ffffff;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
  }

  .cf7-input::placeholder,
  .cf7-textarea::placeholder {
    color: #9ca3af;
  }

  /* Select dropdown */
  .cf7-select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239ca3af' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 16px center;
    padding-right: 40px;
    cursor: pointer;
  }

  /* Textarea */
  .cf7-textarea {
    min-height: 120px;
    resize: vertical;
    line-height: 1.5;
  }

  /* Upload wrapper */
  .cf7-upload-wrapper {
    position: relative;
    padding: 20px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    background-color: #f9fafb;
  }

  .cf7-upload-label {
    display: block;
    font-size: 13px;
    color: #6b7280;
    margin-bottom: 10px;
    line-height: 1.5;
  }

  .cf7-file {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
  }

  .cf7-upload-icon {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #3b82f6;
    font-size: 14px;
    cursor: pointer;
    padding: 8px 12px;
    border-radius: 6px;
    transition: background-color 0.2s;
  }

  .cf7-upload-icon:hover {
    background-color: #e0e7ff;
  }

  /* Submit button */
  .cf7-submit-wrapper {
    text-align: center;
    margin-top: 10px;
  }

  .cf7-submit {
    padding: 14px 48px;
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(59, 130, 246, 0.2);
  }

  .cf7-submit:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    box-shadow: 0 6px 12px rgba(59, 130, 246, 0.3);
    transform: translateY(-2px);
  }

  .cf7-submit:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(59, 130, 246, 0.2);
  }

  /* Validation errors */
  .wpcf7-not-valid-tip {
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
    display: block;
  }

  span.wpcf7-not-valid {
    border-color: #ef4444 !important;
  }

  /* Success/Error messages */
  .wpcf7-response-output {
    margin: 20px 0;
    padding: 14px 20px;
    border-radius: 8px;
    font-size: 14px;
  }

  .wpcf7-mail-sent-ok {
    background-color: #d1fae5;
    color: #065f46;
    border: 1px solid #6ee7b7;
  }

  .wpcf7-validation-errors,
  .wpcf7-mail-sent-ng {
    background-color: #fee2e2;
    color: #991b1b;
    border: 1px solid #fca5a5;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .cf7-row {
      gap: 15px;
      margin-bottom: 15px;
    }

    .cf7-col-half {
      min-width: 100%;
    }

    .cf7-modern-wrapper {
      padding: 15px;
    }

    .cf7-submit {
      width: 100%;
      padding: 14px 24px;
    }
  }

  /* Loading spinner */
  .wpcf7 .ajax-loader {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid rgba(59, 130, 246, 0.3);
    border-top-color: #3b82f6;
    border-radius: 50%;
    animation: cf7-spin 0.8s linear infinite;
    margin-left: 10px;
    vertical-align: middle;
  }

  @keyframes cf7-spin {
    to {
      transform: rotate(360deg);
    }
  }

  .homepage-footer {
    top: auto !important;
  }
</style>