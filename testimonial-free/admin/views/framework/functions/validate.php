<?php
/**
 * Framework validate file.
 *
 * @link https://shapedplugin.com
 * @since 2.0.0
 *
 * @package Testimonial_free
 * @subpackage Testimonial_free/framework
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.

if ( ! function_exists( 'spftestimonial_validate_email' ) ) {
	/**
	 * Email validate
	 *
	 * @param  string $value email.
	 * @return string
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_validate_email( $value ) {

		if ( ! filter_var( $value, FILTER_VALIDATE_EMAIL ) ) {
			return esc_html__( 'Please write a valid email address!', 'testimonial-free' );
		}

	}
}

if ( ! function_exists( 'spftestimonial_validate_numeric' ) ) {
	/**
	 * Numeric validate
	 *
	 * @param  int $value int.
	 * @return int
	 */
	function spftestimonial_validate_numeric( $value ) {

		if ( ! is_numeric( $value ) ) {
			return esc_html__( 'Please write a numeric data!', 'testimonial-free' );
		}

	}
}

if ( ! function_exists( 'spftestimonial_validate_required' ) ) {
	/**
	 * Required validate
	 *
	 * @param  string $value string.
	 * @return string
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_validate_required( $value ) {
		if ( empty( $value ) ) {
			return esc_html__( 'Error! This field is required!', 'testimonial-free' );
		}

	}
}

if ( ! function_exists( 'spftestimonial_validate_url' ) ) {
	/**
	 * URL validate
	 *
	 * @param  string $value value.
	 * @return string
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_validate_url( $value ) {

		if ( ! filter_var( $value, FILTER_VALIDATE_URL ) ) {
			return esc_html__( 'Please write a valid url!', 'testimonial-free' );
		}

	}
}

if ( ! function_exists( 'spftestimonial_customize_validate_email' ) ) {
	/**
	 *
	 * Email validate for Customizer
	 *
	 * @param object $validity Email validity.
	 * @param string $value The Email.
	 * @param object $wp_customize Customize option.
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_customize_validate_email( $validity, $value, $wp_customize ) {

		if ( ! sanitize_email( $value ) ) {
			$validity->add( 'required', esc_html__( 'Please write a valid email address!', 'testimonial-free' ) );
		}

		return $validity;

	}
}

if ( ! function_exists( 'spftestimonial_customize_validate_numeric' ) ) {
	/**
	 *
	 * Numeric validate for Customizer
	 *
	 * @param object $validity Numeric validity.
	 * @param string $value The Numeric.
	 * @param object $wp_customize Customize option.
	 *
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_customize_validate_numeric( $validity, $value, $wp_customize ) {

		if ( ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'Please write a numeric data!', 'testimonial-free' ) );
		}

		return $validity;

	}
}

if ( ! function_exists( 'spftestimonial_customize_validate_required' ) ) {
	/**
	 *
	 * Required validate for Customizer
	 *
	 * @param object $validity Required validity.
	 * @param string $value The Required.
	 * @param object $wp_customize Customize option.
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_customize_validate_required( $validity, $value, $wp_customize ) {

		if ( empty( $value ) ) {
			$validity->add( 'required', esc_html__( 'Error! This field is required!', 'testimonial-free' ) );
		}

		return $validity;

	}
}

if ( ! function_exists( 'spftestimonial_customize_validate_url' ) ) {
	/**
	 *
	 * URL validate for Customizer
	 *
	 * @param object $validity URL validity.
	 * @param string $value The URL.
	 * @param object $wp_customize Customize option.
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function spftestimonial_customize_validate_url( $validity, $value, $wp_customize ) {

		if ( ! filter_var( $value, FILTER_VALIDATE_URL ) ) {
			$validity->add( 'required', esc_html__( 'Please write a valid url!', 'testimonial-free' ) );
		}

		return $validity;

	}
}

