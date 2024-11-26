import sys
import json

def bitwise_operations(numbers, threshold):
    # Realizar validación de entrada
    try:
        nums = [int(x) for x in numbers.split(",")]
    except ValueError:
        return {"error": "Input must be a comma-separated list of integers."}

    # Calcular operaciones bitwise
    bitwise_and = nums[0]
    bitwise_or = nums[0]
    bitwise_xor = nums[0]
    for num in nums[1:]:
        bitwise_and &= num
        bitwise_or |= num
        bitwise_xor ^= num

    # Filtrar números mayores que el umbral
    filtered_numbers = [num for num in nums if num > threshold]

    # Retornar resultados
    return {
        "bitwise_and": bitwise_and,
        "bitwise_or": bitwise_or,
        "bitwise_xor": bitwise_xor,
        "filtered_numbers": filtered_numbers
    }

if __name__ == "__main__":
    # Obtener datos desde argumentos
    if len(sys.argv) < 3:
        print(json.dumps({"error": "Invalid arguments"}))
        sys.exit(1)

    numbers = sys.argv[1]
    threshold = int(sys.argv[2])

    # Procesar y devolver resultados
    result = bitwise_operations(numbers, threshold)
    print(json.dumps(result))

