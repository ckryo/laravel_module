<?php

namespace LaravelModule\Http\Requests;

use Ckryo\Framework\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * 需要进行授权验证的方法，根据数组先后顺序依次执行.
     *
     * @return array
     */
    protected function authorizes() {
        return [];
    }

    /**
     * 表单验证规则
     *
     * @return array
     */
    public function rules() {
        return [];
    }

    /**
     * 表单验证错误信息
     *
     * @return array
     */
    public function messages() {
        return [];
    }
}
