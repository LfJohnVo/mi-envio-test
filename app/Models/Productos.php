<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producto
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property int $precio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Productos extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'productos';

	protected $casts = [
		'precio' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'precio'
	];
}
