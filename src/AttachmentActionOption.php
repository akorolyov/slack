<?php

declare(strict_types=1);



namespace Nexy\Slack;

/**
 * @author Andrew Korolov <akorolyov@mavenecommerce.com>
 */
final class AttachmentActionOption
{

    /**
     *
     * Option Text
     *
     * @var string|null
     */
    protected $text;

    /**
     *
     * Option value
     *
     * @var string|null
     */
    protected $value;


    public function __construct(?string $text, ?string $value = null)
    {
        $this->text = $text;
        $this->value = $value;
    }

    /**
     * @return null|string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param null|string $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return null|string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param null|string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Get the array representation of this action option.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'text' => $this->text,
            'value' => $this->value,
        ];
    }


}