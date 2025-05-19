
import math
import sys

try:
    a = float(sys.argv[1])
    b = float(sys.argv[2])
    c = float(sys.argv[3])

    c_cubed = c ** 3
    sqrt_result = math.sqrt(c_cubed)
    division_result = sqrt_result / a
    mult_result = division_result * 10
    final_result = b + mult_result

    # Final result (used by PHP)
    print(f"{final_result}")

    # Steps
    print(f"Step 1: c = {c:.1f} , c³ = {c_cubed:.1f}")
    print(f"Step 2: √(c³) = {sqrt_result:.1f}")
    print(f"Step 3: {sqrt_result:.1f} / {a:.1f} = {division_result:.1f}")
    print(f"Step 4: {division_result:.1f} * 10 = {mult_result:.1f}")
    print(f"Step 5: {mult_result:.1f} + {b:.1f} = {final_result:.1f}")

except:
    print("Error during calculation")
