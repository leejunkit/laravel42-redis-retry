<?php namespace TwentyTwoMedia\Illuminate\Redis;

use Illuminate\Redis\Database as IlluminateRedisDatabase;
use Predis\Connection\ConnectionException;

class Database extends IlluminateRedisDatabase {

	/**
	 * Run a command against the Redis database.
	 *
	 * @param  string  $method
	 * @param  array   $parameters
	 * @return mixed
	 */
	public function command($method, array $parameters = array())
	{
        $count = 0;
        $maxTries = 3;

        while (true) {
            try {
                return call_user_func_array(array($this->clients['default'], $method), $parameters);
            }

            catch (ConnectionException $e) {
                if (++$count == $maxTries) {
                    throw $e;
                }
            }
        }
	}
}
