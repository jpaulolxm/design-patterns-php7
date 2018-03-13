<?phpAtualiza��o efetuada com sucesso!


namespace Memento;

/**
 * Class TextoMemento
 * @package Memento
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class TextoMemento
{
    /** @var string $estadoTexto Estodo do texto salvo. */
    protected $estadoTexto;

    /**
     * TextoMemento constructor.
     * @param string $estadoTexto Estado do texto a ser salvo.
     */
    public function __construct(string $estadoTexto)
    {
        $this->estadoTexto = $estadoTexto;
    }

    /**
     * Retorna o estado do texto salvo.
     * @return string
     */
    public function getTexto(): string
    {
        return $this->estadoTexto;
    }
}