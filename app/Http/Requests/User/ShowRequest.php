<?php

namespace App\Http\Requests\User;
use App\Models\User;
use App\Http\Requests\BasedFormRequest;

class ShowRequest extends BasedFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = User::findOrFail($this->user_id);
        return $this->user()->can('view', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'numeric'
        ];
    }
}
