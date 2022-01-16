<?php
namespace Demo\Controllers;

use Jenssegers\Blade\Blade;

class DefaultController
{
	public function index()
	{
		$data = '{ "articles": [ { "id": 15, "entity_id": 17, "user_id": 1, "thumbnail": "https://anflash.com/upload/hinhanh/026953.png", "title": "Hệ thống CRM", "alias": "he-thong-crm", "content": "<h3 style=\"text-align:center;\"><strong>XÂY DỰNG HỆ THỐNG CRM CHUYÊN NGHIỆP</strong></h3><p style=\"margin-left:0px;\">Hệ thống CRM hỗ trợ các doanh nghiệp trong quản lý dịch vụ khách hàng, nó vừa là chiến lược kinh doanh, vừa là công nghệ, phần mềm. Chiến lược là yếu tố quyết định tính hiệu quả của toàn bộ hệ thống CRM, vì công nghệ, phần mềm phụ thuộc cấu trúc tổ chức của mỗi doanh nghiệp, mà cấu trúc tổ chức lại phụ thuộc chiến lược CRM. Như vậy sức mạnh của hệ thống CRM trước tiên phải đến từ chính chiến lược CRM.</p>", "activated": 1, "index": 0, "created_at": "2022-01-14T04:44:16.000000Z", "updated_at": "2022-01-14T04:44:16.000000Z" }, { "id": 16, "entity_id": 18, "user_id": 1, "thumbnail": "https://anflash.com/upload/hinhanh/026953.png", "title": "Hệ thống CRM", "alias": "he-thong-crm", "content": "<h3 style=\"text-align:center;\"><strong>XÂY DỰNG HỆ THỐNG CRM CHUYÊN NGHIỆP</strong></h3><p style=\"margin-left:0px;\">Hệ thống CRM hỗ trợ các doanh nghiệp trong quản lý dịch vụ khách hàng, nó vừa là chiến lược kinh doanh, vừa là công nghệ, phần mềm. Chiến lược là yếu tố quyết định tính hiệu quả của toàn bộ hệ thống CRM, vì công nghệ, phần mềm phụ thuộc cấu trúc tổ chức của mỗi doanh nghiệp, mà cấu trúc tổ chức lại phụ thuộc chiến lược CRM. Như vậy sức mạnh của hệ thống CRM trước tiên phải đến từ chính chiến lược CRM.</p>", "activated": 1, "index": 0, "created_at": "2022-01-14T04:44:16.000000Z", "updated_at": "2022-01-14T04:44:16.000000Z" }, { "id": 17, "entity_id": 19, "user_id": 1, "thumbnail": "https://anflash.com/upload/hinhanh/026953.png", "title": "Hệ thống CRM", "alias": "he-thong-crm", "content": "<h3 style=\"text-align:center;\"><strong>XÂY DỰNG HỆ THỐNG CRM CHUYÊN NGHIỆP</strong></h3><p style=\"margin-left:0px;\">Hệ thống CRM hỗ trợ các doanh nghiệp trong quản lý dịch vụ khách hàng, nó vừa là chiến lược kinh doanh, vừa là công nghệ, phần mềm. Chiến lược là yếu tố quyết định tính hiệu quả của toàn bộ hệ thống CRM, vì công nghệ, phần mềm phụ thuộc cấu trúc tổ chức của mỗi doanh nghiệp, mà cấu trúc tổ chức lại phụ thuộc chiến lược CRM. Như vậy sức mạnh của hệ thống CRM trước tiên phải đến từ chính chiến lược CRM.</p>", "activated": 1, "index": 0, "created_at": "2022-01-14T04:44:16.000000Z", "updated_at": "2022-01-14T04:44:16.000000Z" } ] }';
		$blade = new Blade([__DIR__.'/../../src/HomeSlider', __DIR__.'/../../sample'], __DIR__.'/../../cache');

		echo $blade->make('index', ['articles' => json_encode(json_decode($data)->articles)])->render();
	}
}