<?php

namespace Customize\Controller\Admin\Sale;

use Eccube\Controller\AbstractController;
use Eccube\Util\CacheUtil;
use Knp\Component\Pager\Paginator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SaleController extends AbstractController {

    /**
     * @Route("/%eccube_admin_route%/sale", name="admin_sale", methods={"GET", "POST"})
     * @Template("@admin/Sale/index.twig")
     */
    public function index(Request $request) {

    }
}
