<?php
/**
 * Database exceptions.
 *
 * @package    Ohanzee/Database
 * @category   Exceptions
 * @author     Kohana Team
 * @copyright  (c) 2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class Database_Exception extends Exception {

	/**
	 * Creates a new translated exception.
	 *
	 *     throw new Database_Exception('Something went terrible wrong, :user',
	 *         array(':user' => $user));
	 *
	 * @param   string          $message    error message
	 * @param   array           $variables  translation variables
	 * @param   integer|string  $code       the exception code
	 * @param   Exception       $previous   Previous exception
	 * @return  void
	 */
	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
	{
		// Set the message
		$message = empty($variables) ? $message : strtr($message, $variables);

		// Pass the message and integer code to the parent
		parent::__construct($message, (int) $code, $previous);

		// Save the unmodified code
		// @link http://bugs.php.net/39615
		$this->code = $code;
	}

}
