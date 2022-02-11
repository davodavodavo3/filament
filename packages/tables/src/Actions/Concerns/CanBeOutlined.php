<?php

namespace Filament\Tables\Actions\Concerns;

use Closure;

trait CanBeOutlined
{
    protected bool | Closure $isOutlined = false;

    public function outlined(bool | Closure $condition): static
    {
        $this->isOutlined = $condition;

        return $this;
    }

    public function isOutlined(): bool
    {
        return $this->evaluate($this->isOutlined);
    }
}