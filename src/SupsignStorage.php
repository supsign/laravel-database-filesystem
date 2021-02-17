<?php

namespace Supsign\LaravelFileSystem;

use Illuminate\Support\Facades\Storage;

class SupsignStorage extends Storage {

	public static function append($file, $data)
	{
		return parent::append($file, $data);
	}

	public static function exists($file)
	{
		return parent::exists($file);
	}

	public static function delete($file)
	{
		return parent::delete($file);
	}

	public static function download($file)
	{
		return parent::download($file);
	}

	public static function get($file)
	{
		return parent::get($file);
	}

	public static function missing($file)
	{
		return parent::missing($file);
	}

	public static function path($file, $data)
	{
		return parent::path($file, $data);
	}

	public static function put($file, $data)
	{
		return parent::put($file, $data);
	}

	public static function url($file, $data)
	{
		return parent::url($file, $data);
	}

}