<?php

/*******************************************************
 * Copyright (C) 2018 Akerbis <https://www.akerbis.com>
 *
 * This file is part of Akerbis' Alexa Radio Skill.
 *
 * Akerbis' Alexa Radio Skill can not be copied, modified
 * and/or distributed without the express permission of AkerBis
 *******************************************************/

namespace App\RequestHandler;

use MaxBeckers\AmazonAlexa\Request\Request;
use MaxBeckers\AmazonAlexa\Request\Request\PlaybackController\AbstractPlaybackController;
use MaxBeckers\AmazonAlexa\Response\Response;

class PlaybackControllerHandler extends BasicRequestHandler
{
    public function supportsRequest(Request $request): bool
    {
        return $request->request instanceof AbstractPlaybackController;
    }

    public function handleRequest(Request $request): Response
    {
        return $this->responseHelper->getResponse();
    }
}
