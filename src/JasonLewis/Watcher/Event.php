<?php namespace JasonLewis\Watcher;

use JasonLewis\Watcher\Resource\Resource;

class Event {

	/**
	 * Deleted resource event code.
	 * 
	 * @var int
	 */
	const RESOURCE_DELETED = 0;

	/**
	 * Created resource event code.
	 * 
	 * @var int
	 */
	const RESOURCE_CREATED = 1;

	/**
	 * Modified resource event code.
	 * 
	 * @var int
	 */
	const RESOURCE_MODIFIED = 2;

	/**
	 * Resource instance.
	 * 
	 * @var JasonLewis\Watcher\Resource\Resource
	 */
	protected $resource;

	/**
	 * Resource event code.
	 * 
	 * @var int
	 */
	protected $code;

	/**
	 * Create a new event instance.
	 * 
	 * @param  JasonLewis\Watcher\Resource\Resource  $resource
	 * @param  int  $code
	 * @return void
	 */
	public function __construct(Resource $resource, $code)
	{
		$this->resource = $resource;
		$this->code = $code;
	}

	/**
	 * Get the resource event code.
	 * 
	 * @return int
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the resource.
	 * 
	 * @return JasonLewis\Watcher\Resource\Resource
	 */
	public function getResource()
	{
		return $this->resource;
	}

}