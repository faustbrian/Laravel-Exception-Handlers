<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Exception Handlers.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\ExceptionHandlers;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

abstract class Handler extends ExceptionHandler
{
    /**
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException',
    ];

    /**
     * @param Exception $e
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param Exception                $e
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {
        return parent::render($request, $e);
    }
}
